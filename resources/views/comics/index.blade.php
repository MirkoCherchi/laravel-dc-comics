@extends('layout.app')

@section('main')
    <h2 class="text-center">Lista Fumetti</h2>
    <a href="{{ route('comics.create') }}" class="btn btn-primary">Inserisci nuovo fumetto</a>
    @foreach ($comics as $comic_item)
        <ul>
            <li>{{ $comic_item['title'] }} <a href="{{ route('comics.show', $comic_item->id) }}">Info</a> -
                <a href="{{ route('comics.edit', $comic_item->id) }}">Modifica</a> - <form
                    action="{{ route('comics.destroy', $comic_item->id) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Cancella Fumetto">
                </form>
            </li>
        </ul>
    @endforeach
    <a href="{{ route('home') }}" class="btn btn-primary">Torna in HomePage</a>
@endsection
