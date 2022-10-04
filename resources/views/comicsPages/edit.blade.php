@extends('layout.app')

@section('page-title', 'Edit')

@section('content')
    <div class="container">
        <form class="form-edit" action="{{route('comics.update', ['comic' => $comic -> id])}}" method="POST">

            @csrf
            @method('PATCH')

            <label for="thumb">Insersci la copertina</label>
            <input type="text" id="thumb" name="thumb"  value="{{$comic->thumb}}"/>

            <label for="title">Inserisci il titolo</label>
            <input type="text" id="title" name="title" value="{{$comic->title}}"/>

            <label for="series">Inserisci la serie</label>
            <input type="text" id="series" name="series" value="{{$comic->series}}"/>

            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price" value="{{$comic->price}}"/>

            <label for="date">Inserisci la data</label>
            <input type="text" id="date" name="date" value="{{$comic->sale_date}}"/>

            <label for="description">Inserisci la Descrizione</label>
            <textarea name="description" id="description">
            {{$comic->description}}
        </textarea>
            <button type="submit">Applica</button>
        </form>
    </div>
@endsection
