<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Resources\TagResource;
use App\Models\Tag;
use App\Http\Requests\StoreTagRequest;
use App\Http\Requests\UpdateTagRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class TagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        return view('AdminPanel.Sections.Tag.index', [
            'tags' => TagResource::collection(Tag::get()),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function create()
    {
        return view('AdminPanel.Sections.Tag.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StoreTagRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreTagRequest $request)
    {
        $row = DB::transaction(function () use ($request) {
            return Tag::create($request->validated());
        });
        return redirect()->route('tag.index');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function show(Tag $tag)
    {
        return view('AdminPanel.Sections.Tag.show', [
//            'tag' => new TagResource($tag),
            'tag' => $tag,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function edit(Tag $tag)
    {
        return view('AdminPanel.Sections.Tag.edit', [
//            'tag' => new CategoryResource($tag),
            'tag' => $tag,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdateTagRequest $request
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateTagRequest $request, Tag $tag)
    {
        $row = DB::transaction(function () use ($request, $tag) {
            return $tag->update($request->validated());
        });
        return redirect()->route('tag.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Tag $tag
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Tag $tag)
    {
        $row = DB::transaction(function () use ($tag) {
            return $tag->delete();
        });
        return redirect()->route('tag.index');
    }
}
