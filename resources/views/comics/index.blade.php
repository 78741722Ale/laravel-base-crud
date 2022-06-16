@extends('layouts.app')

@section('content')

<!-- Creazione della tabella -->
<table class="table">
    <!-- Intestazione della tabella -->
    <thead>
        <tr>
            <th>ID</th>
            <th>title</th>
            <th>author</th>
            <th>info</th>
            <th>cover_image</th>
            <th>price</th>
        </tr>
    </thead>
    <!-- Corpo della tabella -->
    <tbody>
        <!-- Avvio del ciclo -->
        @forelse($comics as $comic)
        <tr>
            <td>{{$comic->id}}</td>
            <td>{{$comic->title}}</td>
            <td>{{$comic->author}}</td>
            <!-- immagine del fumetto -->
            <td><img width="30" src="{{$comic->cover_image}}" alt="{{$comic->title}}"></td>
            <td>{{$comic->price}}</td>
            <!-- Definizione della rotta per view (edit e Delete non si guardano ancora) -->
            <td><a href="{{route('comics.show', $comic->id)}}">View</a></td>
        </tr>
        @empty
        <p>Non c'è niente qua</p>
        @endforelse
    </tbody>
</table>

@endsection
