@extends ('layouts.app')

@section ('content')

<div class="container flex_cent flex-column">

    <h1>Questo testo è presente solo nel file home</h1>
    <!-- Link per comics -->
    <p>Verifica la lista dei fumetti qui : <a href="{{route('comics.index')}}"> INDEX </a> </p>

</div>




@stop
