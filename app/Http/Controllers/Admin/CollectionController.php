<?php

namespace App\Http\Controllers\Admin;

use App\Collection;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $collections = Collection::orderBy('id', 'desc')->get();
        return view('admin.collections.index', compact('collections'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.collections.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(!$request->hasFile('cover')){
            return redirect()->route('admin.collections.create')->with('success', 'Devi inserire la cover');
        }

        $request['slug'] = Str::slug($request->title);

        $validatedData = $request->validate([
            'title' => 'required',
            'genre' => 'required',
            'slug' => 'required',
            'cover' => 'nullable | image | max:500',
        ]);

        $cover = Storage::put('collection_cover_imgs', $request->cover);
        $validatedData['cover'] = $cover;

        Collection::create($validatedData);

        return redirect()->route('admin.collections.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function show(Collection $collection)
    {
        return view('admin.collections.show', compact('collection'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function edit(Collection $collection)
    {
        return view('admin.collections.edit', compact('collection'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Collection $collection)
    {
        if($request->hasFile('cover')){
            Storage::delete($collection->cover);
            $request['slug'] = Str::slug($request->title);
            $validatedData = $request->validate([
                'title' => 'required',
                'genre' => 'required',
                'slug' => 'required',
                'cover' => 'nullable | image | max:500',
            ]);
            $cover = Storage::put('collection_cover_imgs', $request->cover);
            $validatedData['cover'] = $cover;
            $collection->update($validatedData);
        }else{
            $request['slug'] = Str::slug($request->title);
            $validatedData = $request->validate([
                'title' => 'required',
                'genre' => 'required',
                'slug' => 'required',
                'cover' => 'nullable | image | max:500',
            ]);
            $collection->update($validatedData);
        }

        return redirect()->route('admin.collections.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Collection  $collection
     * @return \Illuminate\Http\Response
     */
    public function destroy(Collection $collection)
    {
        Storage::delete($collection->cover);

        $collection->delete();
        return redirect()->route('admin.collections.index');
    }
}
