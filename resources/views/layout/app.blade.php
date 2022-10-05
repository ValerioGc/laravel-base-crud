<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('page-title')</title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
    </head>
    <body>

    @include('partials.header')

    <main>
        @yield('content')
        <div class="message-error">
            @if ($errors->any)
                @foreach ($errors->all() as $error)
                    {{$error}}
                @endforeach
            @endif
        </div>
    </main>


</body>
</html>
