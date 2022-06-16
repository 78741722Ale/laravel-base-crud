@extends('layouts.app')

@section('content')

<h1>Questo è il contenuto dello Show</h1>

<!-- Titolo del singolo Fumetto -->
<h1>{{$comic->title}}</h1>
<!-- Autore fumetto -->
<h4>{{$comic->author}}</h4>
<!-- Immagine del fumetto -->
<img src="{{$comic->cover_image}}" alt="{{$comic->title}}">
<!-- Prezzo fumetto -->
<p>{{$comic->price}}</p>
<!-- Data rilascio fumetto -->
<p>{{$comic->release}}</p>

<!-- Informazione del fumetto -->
<p>{{$comic->info}}</p>




@endsection
