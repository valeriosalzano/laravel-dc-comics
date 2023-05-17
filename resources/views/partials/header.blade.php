<header class="mb-3 text-bg-light">
    <div class="text-bg-primary text-end p-1 fw-semibold">
        <div class="container">
            <small class="me-3">DC POWER VISA &reg;</small>
            <small class="me-3">ADDITIONAL DC SITES &triangledown;</small>
        </div>
    </div>
    <div class="container">
        <nav class="navbar text-center">
            <div class="container-fluid">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="DC logo"
                        class="d-inline-block align-text-top">
                </a>
                <ul class="navbar-nav flex-row flex-grow-1 justify-content-around text-uppercase fw-semibold fs-6">
                    <li class="nav-item">
                        <a class="nav-link" href="#">characters</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('comics.index') }}">comics</a>
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
                        <a class="nav-link" href="#">shop <span class="text-primary">&triangledown;</span></a>
                    </li>
                </ul>
                <form role="search">
                    <div class="input-group border-bottom border-primary">
                        <input class="input-group-text border-0 bg-light text-end" type="search" placeholder="Search"
                            aria-label="Search">
                        <span class="btn input-group-text"><i class="fa-solid fa-magnifying-glass"></i></span>
                    </div>
                </form>

            </div>
        </nav>
    </div>
</header>
