<?php

namespace App\Http\Controllers;

use App\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comics = Comic::all(); // Prende tutto dal modello
        /* dd($comics); */ // Verifica tramite Dd
        return view('comics.index', compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /* Qui ritorno la vue di create */
        return view('comics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Questa zona è per il create.blade.php
        /* dd($request->all()); */

        /* VAlidare i Dati */
        $validate_data = $request->validate(
            [
                'title' => 'required|max:50',
                'author' => 'required',
                'info' => 'required|max:100',
                'cover_image' => 'required',
                'price' => 'required',
                'release' => 'required',
            ]
        );
        /* Verifica dei dati da validare */
        dd($validate_data);

        /* Avvio l'istanza per il modello e assegno i parametri */
        $comic = new Comic();
        $comic->title = $request['title'];
        $comic->author = $request['author'];
        $comic->info = $request['info'];
        $comic->cover_image = $request['cover_image'];
        $comic->price = $request['price'];
        $comic->release = $request['release'];
        /* Ora salvo l'istanza */
        $comic->save();

        /* Ora il return del pattern */
        /* Tutte le volte ritorna il valore creato però nell'index
        della cartella comics, cosi esce direttamente a schermo */
        return redirect()->route('comics.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function show(Comic $comic)
    {
        // Qua mi basta solo ritornare la view
        /* dd($comic); */
        return view('comics.show', compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function edit(Comic $comic)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        //
    }
}
