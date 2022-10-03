@extends('layout.app')

@section('page-title', 'laravel-comics')

@section('content')
    <div class="comics container">
        <ul class="comics container">
            @foreach($listComics as $comic)
                <li>
                    {{$comic}}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
