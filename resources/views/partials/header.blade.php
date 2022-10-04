<header>
    <a href="{{route('home')}}">
        <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="laravel logo">
    </a>
    <nav>
        <ul>
            <li>
                <a href="{{route('home')}}" class="navLink {{Request::route()->getName() == 'home' ? 'active':''}}">
                    Home
                </a>
            </li>
            <li>
                <a href="{{route('comics.index')}}" class="navLink {{Request::route()->getName() == 'comics' ? 'active':''}}">
                    Comics
                </a>
            </li>
        </ul>
    </nav>
</header>
