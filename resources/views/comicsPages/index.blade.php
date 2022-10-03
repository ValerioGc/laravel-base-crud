@extends('layout.app')

@section('page-title', 'laravel-comics')

@section('content')
    <div class="container">
        <ul class="card-container">
            @foreach($listComics as $comic)
                <li class="card">
                    {{$comic['title']}}
                    {{$comic['price']}}
                    {{$comic['description']}}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
