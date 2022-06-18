<?php

namespace App\Http\Controllers;

use App\Comic;
use App\Http\Requests\ComicRequest;
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

        /* Versione con Create */
        $validate_data = $request->validate();
        Comic::create($validate_data);

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
        /* Qua ritorno la view del form per editare */
        return view('comics.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\ComicRequest  $request
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Comic $comic)
    {

        /* Validare i Dati */
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
        /* $validate_data = $request->validate(); */
        /* Avvio l'update */
        $comic->update($validate_data);
        /* Ora eseguo il return della rotta */
        return redirect()->route('comics.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Comic  $comic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comic $comic)
    {
        // Qui si Cancella un record
        $comic->delete();
        /* Ora eseguo il return della rotta */
        return redirect()->route('comics.index');
    }
}
