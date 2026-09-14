<header class="main-header">
    @php
        $page_name = basename($_SERVER['PHP_SELF']);
    @endphp
    <div class="container h-100">
        <nav class="navbar navbar-expand-lg bg-body-tertiary align-items-stretch h-100">
            <a class="navbar-brand d-flex justify-content-center align-items-center me-0" href="{{ route("homepage") }}">
                <img class="brand-img" src="{{ Vite::asset("resources/img/dc-logo.png") }}" />
            </a>
            <div class="collapse navbar-collapse align-items-stretch justify-content-end h-100"
                id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0 justify-content-end h-100">
                    <li class="nav-item">
                        <a class="{{$page_name == "characters" ? "nav-link active" : "nav-link"}}"
                            href="{{ route("characters") }}">Characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{$page_name == "index.php" ? "nav-link active" : "nav-link"}}" aria-current="page"
                            href="{{ route("homepage") }}">Comics</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{$page_name == "movies" ? "nav-link active" : "nav-link"}}" href="{{ route("movies") }}">Movies</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{$page_name == "tv" ? "nav-link active" : "nav-link"}}" href="{{ route("tv") }}">Tv</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{$page_name == "games" ? "nav-link active" : "nav-link"}}" href="{{ route("games") }}">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{$page_name == "collectibles" ? "nav-link active" : "nav-link"}}"
                            href="{{ route("collectibles") }}">Collectibles</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{$page_name == "videos" ? "nav-link active" : "nav-link"}}" href="{{ route("videos") }}">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{$page_name == "fans" ? "nav-link active" : "nav-link"}}" href="{{ route("fans") }}">Fans</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{$page_name == "news" ? "nav-link active" : "nav-link"}}" href="{{ route("news") }}">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="{{$page_name == "shop" ? "nav-link active" : "nav-link"}}" href="{{ route("shop") }}">Shop</a>
                    </li>
                </ul>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
</header>