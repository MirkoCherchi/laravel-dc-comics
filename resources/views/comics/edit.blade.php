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
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title', $comic->title) }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    value="{{ old('thumb', $comic->thumb) }}">
                @error('thumb')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    value="{{ old('price', $comic->price) }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Data</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    value="{{ old('sale_date', $comic->sale_date) }}">
                @error('sale_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                    value="{{ old('type', $comic->type) }}">
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Artisti</label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists"
                    value="{{ old('artists', $comic->artists) }}">
                @error('artists')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Scrittori</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers"
                    value="{{ old('writers', $comic->writers) }}">
                @error('writers')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    value="{{ old('series', $comic->series) }}">
                @error('series')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id=""
                    cols="30" rows="10">{{ old('description', $comic->description) }}</textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Modifica</button>

        </form>
    </div>
@endsection
