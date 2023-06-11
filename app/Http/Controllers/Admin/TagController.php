<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\TagResource;
use App\Models\Header;
use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return View
     */
    public function index(): View
    {
        return view('AdminPanel.Sections.Tag.index', [
            'tags' => TagResource::collection(Tag::get())
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return View
     */
    public function create(): View
    {
        return view('AdminPanel.Sections.Tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTagRequest $request
     * @return RedirectResponse
     */
    public function store(StoreTagRequest $request): RedirectResponse
    {
        $row = DB::transaction(function () use ($request) {
            return Tag::create($request->validated());
        });
        return redirect()->route('tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param Tag $tag
     * @return View
     */
    public function show(Tag $tag): View
    {
        return view('AdminPanel.Sections.Tag.show', [
//            'tag' => new TagResource($tag),
            'tag' => $tag,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Tag $tag
     * @return View
     */
    public function edit(Tag $tag): View
    {
        return view('AdminPanel.Sections.Tag.edit', [
            'tag' => $tag,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTagRequest $request
     * @param Tag $tag
     * @return RedirectResponse
     */
    public function update(UpdateTagRequest $request, Tag $tag): RedirectResponse
    {
        $row = DB::transaction(function () use ($request, $tag) {
            return $tag->update($request->validated());
        });
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Tag $tag
     * @return RedirectResponse
     */
    public function destroy(Tag $tag): RedirectResponse
    {
        $row = DB::transaction(function () use ($tag) {
            return $tag->delete();
        });
        return redirect()->route('tag.index');
    }
}
