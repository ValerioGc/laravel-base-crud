@extends('layout.app')

@section('page-title', 'Dettaglio Fumetto')

@section('content')
    <div class="container">
            <ul class="comic">
                    <li>
                        <img src="{{$comic['thumb']}}" alt="Copertina {{$comic['title']}}">
                    </li>
                    <li>
                        <h3>{{$comic['title']}}</h3>
                    </li>
                    <li>
                        <p class="info-comic"><em>Serie:</em></p>
                        <p>{{$comic['series']}}</p>
                    </li>
                    <li>
                        <p class="info-comic">Prezzo:</p>
                        <p>{{$comic['price']}}</p>
                    </li>
                    <li>
                        <p class="info-comic">Data uscita:</p>
                        <p>{{$comic['sale_date']}}</p>
                    </li>
                    <li>
                        <p class="info-comic">Descrizione:</p>
                        <p>{{$comic['description']}}</p>
                    </li>
            </ul>
            <a class="btn" href="{{route('comics.index')}}">Torna ai fumetti</a>
    </div>
@endsection
