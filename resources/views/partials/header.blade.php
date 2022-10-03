<header>
    <img src="https://upload.wikimedia.org/wikipedia/commons/9/9a/Laravel.svg" alt="laravel logo">
    <nav>
        <ul>
            @foreach($links as $link)
                <li>
                    <a class="navLink {{Request::route()->getName() == $link?'active':''}}">
                        {{$link}}
                    </a>
                </li>
            @endforeach
        </ul>
    </nav>
</header>
