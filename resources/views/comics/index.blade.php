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
                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-danger btn-md" data-bs-toggle="modal" data-bs-target="#modelId">Delete</button>
                    <!-- Modal -->
                    <div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title">Rimuovi {{$comic->id}} </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Lo vuoi cancellare?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Exit</button>
                                    <!-- Richiesta Delete -->
                                    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <!-- Button per eliminare -->
                                        <button class="btn btn-danger" type="submit">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
            </tr>
            @empty
            <p>Non c'è niente qua</p>
            @endforelse
        </tbody>
    </table>
</div>




@endsection
