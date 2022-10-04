@extends('layout.app')

@section('page-title', 'Comics')

@section('content')
    <div class="container">
        <table>
            <thead>
                <tr>
                    <th>Titolo</th>
                    <th>Serie</th>
                    <th>Data uscita</th>
                    <th>Prezzo</th>
                    <th>Opzioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listComics as $comic)
                    <tr>
                        <td>{{$comic['title']}}</td>
                        <td>{{$comic['series']}}</td>
                        <td>{{$comic['price']}} $</td>
                        <td>{{$comic['sale_date']}}</td>
                        <td>
                            <a class="btn details" href="{{route('comics.show', compact('comic'))}}">Dettagli</a>
                            <a class="btn edit" href="{{route('comics.edit', compact('comic'))}}">Modifica</a>
                            <form class="delete-form" action="{{route('comics.destroy', compact('comic'))}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn delete">Cancella</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
