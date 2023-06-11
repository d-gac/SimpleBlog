<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\SettingResource;
use App\Models\Header;
use App\Models\Setting;
use App\Http\Requests\StoreSettingRequest;
use App\Http\Requests\UpdateSettingRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('AdminPanel.Sections.Setting.index', [
            'setting' => Setting::first(),
            'settings' => Header::first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return RedirectResponse
     */
    public function create(): RedirectResponse
    {
        return redirect()->route('setting.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreSettingRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreSettingRequest $request): RedirectResponse
    {
        return redirect()->route('setting.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Setting  $setting
     * @return View
     */
    public function show(Setting $setting): View
    {
        return view('AdminPanel.Sections.Setting.show', [
            'setting' => $setting,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Setting  $setting
     * @return View
     */
    public function edit(Setting $setting): View
    {
        return view('AdminPanel.Sections.Setting.edit', [
            'setting' => $setting,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateSettingRequest  $request
     * @param  Setting  $setting
     * @return RedirectResponse
     */
    public function update(UpdateSettingRequest $request, Setting $setting): RedirectResponse
    {
        $row = DB::transaction(function () use ($request, $setting) {
            return $setting->update($request->validated());
        });
        return redirect()->route('setting.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Setting  $setting
     * @return RedirectResponse
     */
    public function destroy(Setting $setting): RedirectResponse
    {
        return redirect()->route('setting.index');
    }
}
