@extends('layout.app')

@section('main')
    <h2 class="text-center">Lista Fumetti</h2>
    <a href="{{ route('comics.create') }}" class="btn btn-primary">Inserisci nuovo Fumetto</a>

    <ul class="list-unstyled d-flex flex-wrap row">
        @foreach ($comics as $comic_item)
            <li class="col-3 mb-3 pt-5 gap-5">
                <div class="d-flex align-items-center  flex-column gap-3 mc-style">
                    <p>{{ $comic_item['title'] }}</p>
                    <a class="btn btn-primary" href="{{ route('comics.show', $comic_item->id) }}">Info Fumetto</a>
                    <a class="btn btn-secondary" href="{{ route('comics.edit', $comic_item->id) }}">Modifica Fumetto</a>
                    <form action="{{ route('comics.destroy', $comic_item->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input class="btn btn-danger" type="submit" value="Cancella Fumetto">
                    </form>
                </div>
            </li>
        @endforeach
    </ul>


    <a href="{{ route('home') }}" class="btn btn-primary">Torna in HomePage</a>
@endsection
