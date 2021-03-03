<?php

namespace App\Http\Controllers;

use App\Comics;
use Illuminate\Http\Request;

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
        return view('guests.comics.index', compact('comics'));
    }
}
