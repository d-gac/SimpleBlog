<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreInstanceRequest;
use App\Http\Requests\UpdateInstanceRequest;
use App\Http\Resources\InstanceResource;
use App\Models\Instance;
use App\Models\Tenant;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class InstanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('AdminPanel.Sections.Instance.index', [
            'instances' => InstanceResource::collection(Instance::get())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('AdminPanel.Sections.Instance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreInstanceRequest $request
     * @return RedirectResponse
     */
    public function store(StoreInstanceRequest $request): RedirectResponse
    {
        $row = DB::transaction(function () use ($request) {
            $validated = $request->validated();
            $validated['domain'] = $request->domain_slug;
            return Instance::create($validated);
        });

        if ($row) {
            //instance create trigger
            $tenant = Tenant::create(
                [
                'id' => $request->domain_slug,
                'tenant_name' => $request->name,
                ]
            );
            $tenant->domains()->create(['domain' => $request->domain_slug]);

            if (!$request->active) {
                $tenant->putDownForMaintenance();
            }
        }

        return redirect()->route('instance.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Instance $instance
     * @return View
     */
    public function show(Instance $instance): View
    {
        return view('AdminPanel.Sections.Instance.show', [
            'instance' => $instance,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Instance $instance
     * @return View
     */
    public function edit(Instance $instance): View
    {
        return view('AdminPanel.Sections.Instance.edit', [
            'instance' => $instance,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateInstanceRequest $request
     * @param Instance $instance
     * @return RedirectResponse
     */
    public function update(UpdateInstanceRequest $request, Instance $instance): RedirectResponse
    {
        $row = DB::transaction(function () use ($request, $instance) {
            return $instance->update($request->validated());
        });

        if ($row) {

            $tenant = Tenant::where('id', $instance->domain)->first();

            $tenant->update(
                [
                    'id' => $instance->domain,
                    'tenant_name' => $request->name,
                ]
            );

        }

        return redirect()->route('instance.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Instance $instance
     * @return RedirectResponse
     */
    public function destroy(Instance $instance): RedirectResponse
    {
        $row = DB::transaction(function () use ($instance) {
            return $instance->delete();
        });

        if ($row){
            $tenant = tenancy()->find($instance->domain);
            $tenant->delete();
        }

        return redirect()->route('instance.index');
    }
}
