@extends ('layouts.app')

@section ('content')

    <div class="container h-75 flex_cent">
        <div class="row flex_cent w-100 h-100">
            <!-- Metodo action che richiama la rotta dello store -->
            <form class="w-50" action="{{route('comics.store')}}" method="post">
                <!-- Token di sicurezza -->
                @csrf
                <!-- Titolo Fumetto -->
                <div class="form-group mb-2">
                    <label for="title" class="form-label pb-1">Titolo Fumetto</label>
                    <input type="text" id="title" name="title" class="form-control" placeholder="Scrivi un titolo" aria-describedby="titleHelper">
                </div>
                <!-- Immagine di un Fumetto -->
                <div class="form-group mb-2">
                    <label for="cover_image" class="form-label pb-1">Immagine Fumetto</label>
                    <input type="text" id="cover_image" name="cover_image" class="form-control pb-1" placeholder="https://myimage.png" aria-describedby="coverImageHelper">
                </div>
                <!-- Autore di un Fumetto -->
                <div class="form-group mb-2">
                    <label for="author" class="form-label pb-1">Autore Del Fumetto</label>
                    <input type="text" id="author" name="author" class="form-control pb-1" placeholder="Nome Autore" aria-describedby="authorHelper">
                </div>
                <!-- Info Del Fumetto -->
                <div class="form-group mb-2">
                    <label for="info" class="form-label pb-1">Info Del Fumetto</label>
                    <textarea class="form-control pb-1" id="info" name="info" placeholder="Info" aria-describedby="infoHelper"></textarea>
                </div>
                <!-- Prezzo Del Fumetto -->
                <div class="form-group mb-2">
                    <label for="price" class="form-label">Prezzo del Fumetto</label>
                    <input type="text" id="price" name="price" class="form-control" placeholder="Prezzo" aria-describedby="priceHelper">
                </div>
                <!-- Rilascio Del Fumetto -->
                <div class="form-group mb-2">
                    <label for="release" class="form-label">Rilascio del Fumetto</label>
                    <input type="text" id="release" name="release" class="form-control" placeholder="Data d'uscita" aria-describedby="infoHelper">
                </div>
                <!-- Button del Submit -->
                <button type="submit" class="btn mt-2 btn-primary">Aggiungi</button>
            </form>
        </div>
    </div>


    <!-- <h1>Questo testo è presente solo nel Create</h1> -->


@stop
