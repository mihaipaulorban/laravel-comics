<header class="d-flex align-items-center justify-content-between px-5 py-3">
    <div>
        <img src="{{ Vite::asset ('public/img/dc-logo.png') }}" alt="">
    </div>
    <nav>
        <ul class="my-menu list-unstyled d-flex align-items-center gap-2">
            <li> <a class="my-menu-link" href="{{ route('home')}}">Home</a></li>
            <li> <a class="my-menu-link" href="{{ route('comics')}}">Comics</a></li>
            <li> <a class="my-menu-link" href="{{ route('news')}}">News</a></li>
        </ul>
    </nav>
</header>
