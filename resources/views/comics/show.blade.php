@extends('layout.app')

@section('main')
    <h2 class="text-center">Dettaglio Fumetto</h2>
    <div class="d-flex justify-content-center align-items-center py-3">
        <div class="card" style="width: 30rem;">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="{{ $comic->title }}">
            <div class="card-body">
                <h5 class="card-title text-center">{{ $comic->title }}</h5>
                <p class="card-text"><strong>Prezzo: </strong>{{ $comic->price }}</p>
                <p class="card-text"><strong>Tipo: </strong>{{ $comic->type }}</p>
                <p class="card-text"><strong>Data: </strong>{{ $comic->sale_date }}</p>
                <p class="card-text"><strong>Serie: </strong>{{ $comic->series }}</p>
                <p class="card-text"><strong>Descrizione: </strong>{{ $comic->description }}</p>
            </div>
        </div>
    </div>
    <div class="d-flex justify-content-center align-items-center py-2">
        <a href="{{ route('comics.index') }}" class="btn btn-primary py-2">Torna ai fumetti</a>
    </div>
@endsection
