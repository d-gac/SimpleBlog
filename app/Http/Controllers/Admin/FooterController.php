<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Footer;
use App\Http\Requests\StoreFooterRequest;
use App\Http\Requests\UpdateFooterRequest;
use App\Models\Header;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;

class FooterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('AdminPanel.Sections.Footer.index', [
            'footer' => Footer::first()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return RedirectResponse
     */
    public function create(): RedirectResponse
    {
        return redirect()->route('footer.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  StoreFooterRequest  $request
     * @return RedirectResponse
     */
    public function store(StoreFooterRequest $request): RedirectResponse
    {
        return redirect()->route('footer.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Footer $footer
     * @return View
     */
    public function show(Footer $footer): View
    {
        return view('AdminPanel.Sections.Footer.show', [
            'footer' => $footer,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Footer  $footer
     * @return View
     */
    public function edit(Footer $footer): View
    {
        return view('AdminPanel.Sections.Footer.edit', [
            'footer' => $footer,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UpdateFooterRequest  $request
     * @param  Footer  $footer
     * @return RedirectResponse
     */
    public function update(UpdateFooterRequest $request, Footer $footer): RedirectResponse
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
     * @param  Footer  $footer
     * @return RedirectResponse
     */
    public function destroy(Footer $footer): RedirectResponse
    {
        return redirect()->route('footer.index');
    }
}
