@extends('layout.app')

@section('main')
    <h1 class="text-center">Dc Comics</h1>
    <div class="d-flex justify-content-center align-items-center py-5">
        <a href="{{ route('comics.index') }}" class="btn btn-primary">Mostra fumetti</a>
    </div>
@endsection
