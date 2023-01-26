<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInstanceRequest;
use App\Http\Requests\UpdateInstanceRequest;
use App\Http\Resources\InstanceResource;
use App\Models\Instance;
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
     * @param  \App\Http\Requests\StoreInstanceRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreInstanceRequest $request)
    {
        $row = DB::transaction(function () use ($request) {
            return Instance::create($request->validated());
        });
        return redirect()->route('instance.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instance  $instance
     * @return \Illuminate\Http\Response
     */
    public function show(Instance $instance)
    {
        return view('AdminPanel.Sections.Instance.show', [
            'Instance' => $Instance,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instance  $instance
     * @return \Illuminate\Http\Response
     */
    public function edit(Instance $instance)
    {
        return view('AdminPanel.Sections.Instance.edit', [
            'Instance' => $Instance,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstanceRequest  $request
     * @param  \App\Models\Instance  $instance
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInstanceRequest $request, Instance $instance)
    {
        $row = DB::transaction(function () use ($request, $Instance) {
            return $Instance->update($request->validated());
        });
        return redirect()->route('instance.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instance  $instance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instance $instance)
    {
        $row = DB::transaction(function () use ($Instance) {
            return $Instance->delete();
        });
        return redirect()->route('instance.index');
    }
}
