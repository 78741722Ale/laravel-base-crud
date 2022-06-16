@extends('layouts.app')

@section('content')


<!-- Contenitore generale -->
<div class="container bordo h-100 flex_cent">
        <!-- Contenitore della Singola Card -->
    <div class="row bordo w-25 h-75">
        <div class="card p-0 w-100 h-50">
            <!-- Immagine del fumetto -->
            <img class="img-fluid" src="{{$comic->cover_image}}" alt="{{$comic->title}}">
            <!-- Titolo del singolo Fumetto -->
            <h2>Titolo : {{$comic->title}}</h2>
            <!-- Autore fumetto -->
            <h4>Autore : {{$comic->author}}</h4>
            <!-- Informazione del fumetto -->
            <p class="mb-0">Dettagli : {{$comic->info}}</p>
            <!-- Prezzo fumetto -->
            <p class="mb-0">Prezzo : <strong>{{$comic->price}} €</strong></p>
            <!-- Data rilascio fumetto -->
            <p class="mb-0">Data d'uscita : {{$comic->release}}</p>
        </div>
    </div>
</div>











@endsection
