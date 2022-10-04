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
        $validated = $request->validated();

        $validated['is_visible_twitter'] = !$request->has('is_visible_twitter') ? 0 : 1;
        $validated['is_visible_facebook'] = !$request->has('is_visible_facebook') ? 0 : 1;
        $validated['is_visible_github'] = !$request->has('is_visible_github') ? 0 : 1;
        $validated['is_visible_linkedin'] = !$request->has('is_visible_linkedin') ? 0 : 1;
        $validated['is_visible_youtube'] = !$request->has('is_visible_youtube') ? 0 : 1;

        $row = DB::transaction(function () use ($validated, $footer) {
            return $footer->update($validated);
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
