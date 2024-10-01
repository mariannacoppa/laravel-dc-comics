<header>
    <div class="bg-primary">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-end">
                        <div class="text-uppercase text-light m-1 me-3">
                            dc power&#8480; visa&circledR;
                        </div>
                        <div class="text-uppercase text-light m-1">
                            additional dc sites
                        </div>
                        <i class="bi bi-chevron-down text-light mt-1"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="logo">
                        <a href="{{ route('homepage') }}">
                            <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc-logo" class="logo">
                        </a>
                    </div>
                    <div class="menu">
                        <ul class="list-unstyled d-flex m-0">
                            <li class="nav-item px-3 py-5"><a href="#" class="nav-link text-uppercase">characters</a>
                            </li>
                            <li
                                class="nav-item px-3 py-5 {{ Route::currentRouteName() === 'comics' || Route::currentRouteName() === 'comics.show' ? 'active' : '' }}">
                                <a href="{{ route('comics.index') }}" class="nav-link text-uppercase">comics</a>
                            </li>
                            <li class="nav-item px-3 py-5"><a href="#" class="nav-link text-uppercase">movies</a></li>
                            <li class="nav-item px-3 py-5"><a href="#" class="nav-link text-uppercase">tv</a></li>
                            <li class="nav-item px-3 py-5"><a href="#" class="nav-link text-uppercase">games</a></li>
                            <li class="nav-item px-3 py-5"><a href="#" class="nav-link text-uppercase">collectibles</a>
                            </li>
                            <li class="nav-item px-3 py-5"><a href="#" class="nav-link text-uppercase">videos</a></li>
                            <li class="nav-item px-3 py-5"><a href="#" class="nav-link text-uppercase">fans</a></li>
                            <li class="nav-item px-3 py-5"><a href="#" class="nav-link text-uppercase">news</a></li>
                            <li class="d-flex nav-item px-3 py-5">
                                <a href="#" class="nav-link text-uppercase">shop</a>
                                <i class="bi bi-chevron-down ms-1"></i>
                            </li>
                        </ul>
                    </div>
                    <div class="search d-flex">
                        <input type="text" name="search" class="form-control" placeholder="Search">
                        <i class="bi bi-search"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>