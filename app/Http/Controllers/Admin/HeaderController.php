<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Header;
use App\Http\Requests\StoreHeaderRequest;
use App\Http\Requests\UpdateHeaderRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('AdminPanel.Sections.Header.index', [
            'header' => Header::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return RedirectResponse
     */
    public function create(): RedirectResponse
    {
        return redirect()->route('header.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreHeaderRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreHeaderRequest $request): RedirectResponse
    {
        return redirect()->route('header.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  Header  $header
     * @return View
     */
    public function show(Header $header): View
    {
        return view('AdminPanel.Sections.Header.show', [
            'header' => $header,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return View
     */
    public function edit(Header $header): View
    {
        return view('AdminPanel.Sections.Header.edit', [
            'header' => $header,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateHeaderRequest  $request
     * @param  Header  $header
     * @return RedirectResponse
     */
    public function update(UpdateHeaderRequest $request, Header $header): RedirectResponse
    {
        $validated = $request->validated();

        $validated['is_visible_webTitle'] = !$request->has('is_visible_webTitle') ? 0 : 1;
        $validated['is_visible_about'] = !$request->has('is_visible_about') ? 0 : 1;
        $validated['is_visible_contact'] = !$request->has('is_visible_contact') ? 0 : 1;

        $row = DB::transaction(function () use ($validated, $header) {
            return $header->update($validated);
        });
        return redirect()->route('header.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  Header  $header
     * @return RedirectResponse
     */
    public function destroy(Header $header): RedirectResponse
    {
        return redirect()->route('header.index');
    }
}
