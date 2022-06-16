@extends ('layouts.app')

@section ('content')

    <h1>Questo testo è presente solo nel file home</h1>
    <!-- Link per comics -->
    <a href="{{route('comics.index')}}"> INDEX </a>

@stop
