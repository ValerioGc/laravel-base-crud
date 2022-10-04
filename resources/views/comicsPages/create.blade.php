@extends('layout.app')

@section('page-title', 'Create')

@section('content')
    <div class="container">
        <form class="form-edit" action="{{route('comics.store')}}" method="POST">
            @csrf
            <label for="thumb">Insersci la copertina</label>
            <input type="text" id="thumb" name="thumb" />

            <label for="title">Inserisci il titolo</label>
            <input type="text" id="title" name="title" />

            <label for="series">Inserisci la serie</label>
            <input type="text" id="series" name="series" />

            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price" />

            <label for="date">Inserisci la data</label>
            <input type="text" id="date" name="date" />

            <label for="description">Inserisci la Descrizione</label>
            <textarea name="description" id="description"></textarea>
            <button type="submit">Invia</button>
        </form>
    </div>
@endsection
