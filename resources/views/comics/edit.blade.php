@extends('layout.app')

@section('main')
    <div class="container">

        <h2 class="text-center">Modifica Fumetto: {{ $comic->title }}</h2>
        <a href="{{ route('comics.index') }}" class="btn btn-primary my-3">Torna in HomePage</a>
        <form action="{{ route('comics.update', $comic->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title" value="{{ $comic->title }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb" value="{{ $comic->thumb }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price" value="{{ $comic->price }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Data</label>
                <input type="text" class="form-control" name="sale_date" value="{{ $comic->sale_date }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type" value="{{ $comic->type }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Artisti</label>
                <input type="text" class="form-control" name="artists" value="{{ $comic->artists }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Scrittori</label>
                <input type="text" class="form-control" name="writers" value="{{ $comic->writers }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Serie</label>
                <input type="text" class="form-control" name="series" value="{{ $comic->series }}">
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $comic->description }}</textarea>
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>

        </form>
    </div>
@endsection
