<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    public function index()
    {
        $comics = Comic::all();
        

        return view('comics.index', compact('comics'));
    }

    public function show($id)
    {
        $comic = Comic::findorfail($id);

        return view('comics.show', compact('comic'));
    }
}
