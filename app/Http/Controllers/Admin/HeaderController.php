<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Header;
use App\Http\Requests\StoreHeaderRequest;
use App\Http\Requests\UpdateHeaderRequest;
use Illuminate\Support\Facades\DB;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('AdminPanel.Sections.Header.index', [
            'header' => Header::first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        return redirect()->route('header.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHeaderRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreHeaderRequest $request)
    {
        return redirect()->route('header.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Header $header)
    {
        return view('AdminPanel.Sections.Header.show', [
            'header' => $header,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Header $header)
    {
        return view('AdminPanel.Sections.Header.edit', [
            'header' => $header,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHeaderRequest  $request
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateHeaderRequest $request, Header $header)
    {
        $row = DB::transaction(function () use ($request, $header) {
            return $header->update($request->validated());
        });
        return redirect()->route('header.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Header  $header
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Header $header)
    {
        return redirect()->route('header.index');
    }
}
