@extends ('layouts.app')

@section ('content')

    <div class="container h-100 flex_cent">
        <div class="row flex_cent_2 w-100 h-100">
            <!-- Section Title -->
            <h1 class="w-50">Create a Comic</h1>
            <!-- Avvio del request data -->
            @if ($errors->any())
                <div class="alert w-50 p-1 alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- Metodo action che richiama la rotta dello store -->
            <form class="w-50 h-75" action="{{route('comics.store')}}" method="post">
                <!-- Token di sicurezza -->
                @csrf
                <!-- Titolo Fumetto -->
                <div class="form-group mb-2">
                    <label for="title" class="form-label pb-1">Titolo Fumetto</label>
                    <input type="text" id="title" name="title" class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" placeholder="Scrivi un titolo" aria-describedby="titleHelper">
                    <!-- Error -->
                    @error('title')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Immagine di un Fumetto -->
                <div class="form-group mb-2">
                    <label for="cover_image" class="form-label pb-1">Immagine Fumetto</label>
                    <input type="text" id="cover_image" name="cover_image" class="form-control @error('cover_image') is-invalid @enderror pb-1" value="{{old('cover_image')}}" placeholder="https://myimage.png" aria-describedby="coverImageHelper">
                    <!-- Error -->
                    @error('cover_image')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Autore di un Fumetto -->
                <div class="form-group mb-2">
                    <label for="author" class="form-label pb-1">Autore Del Fumetto</label>
                    <input type="text" id="author" name="author" class="form-control @error('author') is-invalid @enderror pb-1" value="{{old('author')}}" placeholder="Nome Autore" aria-describedby="authorHelper">
                    <!-- Error -->
                    @error('author')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Info Del Fumetto -->
                <div class="form-group mb-2">
                    <label for="info" class="form-label pb-1">Info Del Fumetto</label>
                    <textarea class="form-control @error('info') is-invalid @enderror pb-1" id="info" name="info" placeholder="Info" value="{{old('info')}}" aria-describedby="infoHelper"></textarea>
                    <!-- Error -->
                    @error('info')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Prezzo Del Fumetto -->
                <div class="form-group mb-2">
                    <label for="price" class="form-label">Prezzo del Fumetto</label>
                    <input type="text" id="price" name="price" class="form-control" placeholder="Prezzo" value="{{old('price')}}" aria-describedby="priceHelper">
                    <!-- Error -->
                    @error('price')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Rilascio Del Fumetto -->
                <div class="form-group mb-2">
                    <label for="release" class="form-label">Rilascio del Fumetto</label>
                    <input type="text" id="release" name="release" class="form-control" value="{{old('release')}}" placeholder="Data d'uscita" aria-describedby="infoHelper">
                    <!-- Error -->
                    @error('release')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <!-- Button del Submit -->
                <button type="submit" class="btn mt-2 btn-primary">Aggiungi</button>
            </form>
        </div>
    </div>
@stop
