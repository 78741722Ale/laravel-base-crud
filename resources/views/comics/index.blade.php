@extends('layouts.app')

@section('content')


<div class="container-xl">
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
                <th>release</th>
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
                <td>{{$comic->info}}</td>
                <!-- immagine del fumetto -->
                <td><img width="30" src="{{$comic->cover_image}}" alt="{{$comic->title}}"></td>
                <td>{{$comic->price}}</td>
                <td>{{$comic->release}}</td>
                <!-- Definizione della rotta per view (edit e Delete non si guardano ancora) -->
                <td>
                    <!-- Visualizza -->
                    <a class="btn btn-primary" href="{{route('comics.show', $comic->id)}}">View</a>
                    <!-- Edita -->
                    <a class="btn btn-warning" href="{{route('comics.edit', $comic->id)}}">Edit</a>
                </td>
                <!-- Cancella  -->
                <td>
                    <!-- Richiesta Delete -->
                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <!-- Button per eliminare -->
                        <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <p>Non c'è niente qua</p>
            @endforelse
        </tbody>
    </table>
</div>




@endsection
