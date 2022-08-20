<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Http\Requests\StoreFooterRequest;
use App\Http\Requests\UpdateFooterRequest;
use Illuminate\Support\Facades\DB;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('AdminPanel.Sections.Footer.index', [
            'footer' => Footer::first(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        return redirect()->route('footer.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreFooterRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreFooterRequest $request)
    {
        return redirect()->route('footer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Footer $footer)
    {
        return view('AdminPanel.Sections.Footer.show', [
//            'category' => new CategoryResource($category),
            'footer' => $footer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Footer $footer)
    {
        return view('AdminPanel.Sections.Footer.edit', [
//            'category' => new CategoryResource($category),
            'footer' => $footer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFooterRequest  $request
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateFooterRequest $request, Footer $footer)
    {
        $row = DB::transaction(function () use ($request, $footer) {
            return $footer->update($request->validated());
        });
        return redirect()->route('footer.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footer  $footer
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Footer $footer)
    {
        return redirect()->route('footer.index');
    }
}
