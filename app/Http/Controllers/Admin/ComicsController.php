<?php

namespace App\Http\Controllers\Admin;

use App\Comics;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ComicsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comics::orderBy('id', 'desc')->get();
        return view('admin.comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['slug'] = Str::slug($request->title);

        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'cover' => 'nullable | image | max:500',
            'available' => 'required',
            'US_price'=>'required',
            'on_sale_date'=>'required',
            'volume_issue'=>'required',
            'trim_size'=>'required',
            'page_count'=>'required',
            'rated'=>'required',
        ]);

        $cover = Storage::put('cover_imgs', $request->cover);
        $validatedData['cover'] = $cover;

        Comics::create($validatedData);

        return redirect()->route('admin.comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function show(Comics $comic)
    {
        return view('admin.comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function edit(Comics $comic)
    {
        return view('admin.comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comics $comic)
    {
        Storage::delete($comic->cover);
        
        $request['slug'] = Str::slug($request->title);
        
        $validatedData = $request->validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'cover' => 'nullable | image | max:500',
            'available' => 'required',
            'US_price'=>'required',
            'on_sale_date'=>'required',
            'volume_issue'=>'required',
            'trim_size'=>'required',
            'page_count'=>'required',
            'rated'=>'required',
        ]);
        
        $cover = Storage::put('cover_imgs', $request->cover);
        $validatedData['cover'] = $cover;
      
        $comic->update($validatedData);

        return redirect()->route('admin.comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comics  $comics
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comics $comic)
    {
        Storage::delete($comic->cover);

        $comic->delete();
        return redirect()->route('admin.comics.index');
    }
}
