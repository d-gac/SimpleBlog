<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInstanceRequest;
use App\Http\Requests\UpdateInstanceRequest;
use App\Http\Resources\InstanceResource;
use App\Models\Instance;
use App\Models\Tenant;
use Illuminate\Support\Facades\DB;

class InstanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('AdminPanel.Sections.Instance.index', [
            'instances' => InstanceResource::collection(Instance::get())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('AdminPanel.Sections.Instance.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreInstanceRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreInstanceRequest $request)
    {
        $row = DB::transaction(function () use ($request) {
            $validated = $request->validated();
            $validated['domain'] = $request->domain_slug;
            return Instance::create($validated);
        });

        if ($row) {
            //instance create trigger
            $tenant = Tenant::create(['id' => $request->domain_slug]);
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
     * @param \App\Models\Instance $instance
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Instance $instance)
    {
        return view('AdminPanel.Sections.Instance.show', [
            'instance' => $instance,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Instance $instance
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Instance $instance)
    {
        return view('AdminPanel.Sections.Instance.edit', [
            'instance' => $instance,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateInstanceRequest $request
     * @param \App\Models\Instance $instance
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateInstanceRequest $request, Instance $instance)
    {
        $row = DB::transaction(function () use ($request, $instance) {
            return $instance->update($request->validated());
        });

        if ($row) {
            $tenant = tenancy()->find($instance->domain);
            if (!$request->active) {
                $tenant->putDownForMaintenance();
            } else {
                $tenant->update(['maintenance_mode' => null]);
            }
        }

        return redirect()->route('instance.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Instance $instance
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Instance $instance)
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
