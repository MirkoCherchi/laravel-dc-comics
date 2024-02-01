@extends('layout.app')

@section('main')
    <div class="container">
        <h2 class="text-center">Inserisci Nuovo Fumetto</h2>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Titolo</label>
                <input type="text" class="form-control" name="title">
            </div>
            <div class="mb-3">
                <label class="form-label">Immagine</label>
                <input type="text" class="form-control" name="thumb">
            </div>
            <div class="mb-3">
                <label class="form-label">Prezzo</label>
                <input type="text" class="form-control" name="price">
            </div>
            <div class="mb-3">
                <label class="form-label">Data</label>
                <input type="text" class="form-control" name="sale_date">
            </div>
            <div class="mb-3">
                <label class="form-label">Tipo</label>
                <input type="text" class="form-control" name="type">
            </div>
            <div class="mb-3">
                <label class="form-label">Artisti</label>
                <input type="text" class="form-control" name="artists">
            </div>
            <div class="mb-3">
                <label class="form-label">Scrittori</label>
                <input type="text" class="form-control" name="writers">
            </div>
            <div class="mb-3">
                <label class="form-label">Serie</label>
                <input type="text" class="form-control" name="series">
            </div>
            <div class="mb-3">
                <label class="form-label">Descrizione</label>
                <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Inserisci</button>

        </form>
    </div>
@endsection
