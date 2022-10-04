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

            <label for="sale_date">Inserisci la data</label>
            <input type="text" id="sale_date" name="sale_date" />

            <label for="type">Tipo</label>
            <input type="text" id="type" name="type" />

            <label for="description">Inserisci la Descrizione</label>
            <textarea name="description" id="description"></textarea>
            <button type="submit">Invia</button>
        </form>
    </div>
@endsection
