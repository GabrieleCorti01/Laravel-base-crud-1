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


    public function create()
    {
        return view('comics.create');
    }


    public function store(Request $request)
    {
        $comic = $request->all();

        $newComic = new Comic;
        $newComic->title = $comic['title'];
        $newComic->author = $comic['author'];
        $newComic->save();
        
        return redirect()->route('comics.show', $newComic->id);
    }
}
