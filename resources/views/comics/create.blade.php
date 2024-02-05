@extends('layout.app')

@section('main')
    <div class="container">
        <h2 class="text-center">Inserisci Nuovo Fumetto</h2>
        <a href="{{ route('comics.index') }}" class="btn btn-primary my-3">Torna in HomePage</a>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" name="title"
                    value="{{ old('title') }}">
                @error('title')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror

            </div>
            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" name="thumb"
                    value="{{ old('thumb') }}">
                @error('thumb')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input type="text" class="form-control @error('price') is-invalid @enderror" name="price"
                    value="{{ old('price') }}">
                @error('price')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Data</label>
                <input type="text" class="form-control @error('sale_date') is-invalid @enderror" name="sale_date"
                    value="{{ old('sale_date') }}">
                @error('sale_date')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" name="type"
                    value="{{ old('type') }}">
                @error('type')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Artisti</label>
                <input type="text" class="form-control @error('artists') is-invalid @enderror" name="artists"
                    value="{{ old('artists') }}">
                @error('artists')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Scrittori</label>
                <input type="text" class="form-control @error('writers') is-invalid @enderror" name="writers"
                    value="{{ old('writers') }}">
                @error('writers')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Serie</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" name="series"
                    value="{{ old('series') }}">
                @error('series')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea name="description" class="form-control @error('description') is-invalid @enderror" id=""
                    cols="30" rows="10" value="{{ old('description') }}"></textarea>
                @error('description')
                    <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Inserisci</button>

        </form>
    </div>
@endsection
