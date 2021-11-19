<div class="row g-0">
    <div class="col-4">
        <h1 id="main-header">SellPhone.sk</h1>
    </div>
    <div class="col-md-4 col-5">
        <form class="d-sm-flex d-none my-2 my-lg-3">
            <input class="form-control" type="search" placeholder="Zadajte názov produktu" aria-label="Search">
            <span class="input-group-append">
            <button class="btn btn-outline-secondary" type="button">
                <i class="fa fa-search"></i>
            </button>
        </span>
        </form>
    </div>
    <div class="col-md-4 col-3 d-flex justify-content-end" id="nav-icons">
        <button class="btn" type="button" data-bs-toggle="modal" data-bs-target="#loginModal">
            <i class="far fa-user"></i>
        </button>
        <button class="btn" type="button">
            <i class="fas fa-shopping-cart"></i>
        </button>
    </div>
</div>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav w-100 nav-justified">
                <li class="nav-item"><a id="test" class="nav-link" href="#">Apple</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Samsung</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Huawei</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Xiaomi</a></li>
                <li class="nav-item"><a class="nav-link" href="#">OnePlus</a></li>
                <li class="nav-item"><a class="nav-link" href="#">LG</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Príslušenstvo</a></li>
            </ul>
        </div>
        <div>
            <form class="d-sm-none d-flex">
                <input class="form-control" type="search" placeholder="Zadajte názov produktu" aria-label="Search">
                <span class="input-group-append">
                <button class="btn btn-outline-secondary" type="button">
                    <i class="fa fa-search"></i>
                </button>
            </span>
            </form>
        </div>
    </div>

    <div class="modal fade" id="loginModal" tabindex="-1">
        <div class="modal-dialog">
            <div class="modal-content">
                @guest
                <div class="modal-header">
                    <h5 class="modal-title" id="loginLabel">Prihlásenie</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-3">
                            <label class="form-label">Emailová adresa</label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="Emailová adresa" />
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Heslo</label>
                            <input type="password" class="form-control" id="password" name="password" placeholder="Heslo" />
                        </div>
                        <div class="modal-footer d-block">
{{--                                @if (Route::has('register'))--}}
                                    <p class="float-start">Ešte nemáte účet? <a href="{{ route('register') }}">Zaregistrujte sa</a></p>
{{--                                @endif--}}

{{--                                @if (Route::has('login'))--}}
                                    <a href="{{ route('login') }}" class="btn btn-dark float-end">Prihlásenie</a>
{{--                                @endif--}}
                        </div>
                    </form>
                </div>
                @else
                    <a href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                @endguest
            </div>
        </div>
    </div>
</nav>


