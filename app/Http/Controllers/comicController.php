<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class comicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all();

        return view('pages.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request -> all();

        //creazione nuovi dati
        $newComic = new Comic();

        $newComic -> name = $data['name'];
        $newComic->publication_date = $data['publication_date'];
        $newComic -> price = $data['price'];
        $newComic -> avaible = $data['avaible'];

        $newComic -> save();

        return redirect() -> route('comic.show', $newComic -> id);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $comics = Comic::find($id);

        return view('pages.show', compact('comics'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comics = Comic::find($id);
        return view('pages.edit', compact('comics'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $comics = Comic::find($id);

        $data = $request->all();

        $comics -> name = $data['name'];
        $comics->publication_date = $data['publication_date'];
        $comics -> price = $data['price'];
        $comics -> avaible = $data['avaible'];

        $comics -> save();

        return redirect() -> route('comic.show', $comics -> id);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comics = Comic::find($id);
        $comics->delete();

        return redirect()->route('comic.index');
    }
}
