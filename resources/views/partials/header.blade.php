<header>
    <nav class="navbar bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo"
                    class="d-inline-block align-text-top">
            </a>
            <ul class="navbar-nav flex-row bg-body-tertiary flex-grow-1 justify-content-around text-uppercase">
                <li class="nav-item">
                    <a class="nav-link" href="#">characters</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('comics.index')}}">comics</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">movies</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">tv</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">games</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">collectibles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">videos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">fans</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">news</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">shop</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
            </form>

        </div>
    </nav>
</header>
