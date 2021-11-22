<div class="row g-0">
    <div class="col-4">
        <h1 id="main-header"><a href="{{ route('homepage') }}">SellPhone.sk</a></h1>
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
    <div class="col-md-4 col-3 d-flex justify-content-end align-self-center" id="nav-icons">
        @guest
            <a href="{{ route('login') }}" class="btn">
                <i class="far fa-user"></i>
            </a>
        @else
            <a href="" class="btn">
                <i class="far fa-user"></i>
            </a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button class="btn">
                    <i class="far fa-sign-out"></i>
                </button>
            </form>
        @endguest

        {{--        <a href="{{ route('summarization') }}" class="btn">--}}
        {{--            <i class="fas fa-shopping-cart"></i>--}}
        {{--        </a>--}}
        <button class="btn">
            <i class="fas fa-shopping-cart"></i>
        </button>
    </div>
</div>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="collapse navbar-collapse" id="navbarNav" action="{{ route('product.index') }}" method="GET">
            <ul class="navbar-nav w-100 nav-justified">
                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="apple">Apple</button></li>
                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="samsung">Samsung</button></li>
                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="huawei">Huawei</button></li>
                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="xiaomi">Xiaomi</button></li>
                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="oneplus">OnePlus</button></li>
                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="lg">LG</button></li>
                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="accessories">Príslušenstvo</button></li>
{{--                <li class="nav-item"><button class="btn"><a class="nav-link">Samsung</a></button></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="{{ route('huawei') }}">Huawei</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="{{ route('xiaomi') }}">Xiaomi</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="{{ route('oneplus') }}">OnePlus</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="{{ route('lg') }}">LG</a></li>--}}
{{--                <li class="nav-item"><a class="nav-link" href="{{ route('accessories') }}">Príslušenstvo</a></li>--}}
            </ul>
        </form>
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

    {{--    <div class="modal fade" id="loginModal" tabindex="-1">--}}
    {{--        <div class="modal-dialog">--}}
    {{--            <div class="modal-content">--}}
    {{--                @guest--}}
    {{--                <div class="modal-header">--}}
    {{--                    <h5 class="modal-title" id="loginLabel">Prihlásenie</h5>--}}
    {{--                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>--}}
    {{--                </div>--}}
    {{--                <div class="modal-body">--}}
    {{--                    <form>--}}
    {{--                        <div class="mb-3">--}}
    {{--                            <label class="form-label">Emailová adresa</label>--}}
    {{--                            <input type="text" class="form-control" id="username" name="username" placeholder="Emailová adresa" />--}}
    {{--                        </div>--}}
    {{--                        <div class="mb-3">--}}
    {{--                            <label class="form-label">Heslo</label>--}}
    {{--                            <input type="password" class="form-control" id="password" name="password" placeholder="Heslo" />--}}
    {{--                        </div>--}}
    {{--                        <div class="modal-footer d-block">--}}
    {{--                                @if (Route::has('register'))--}}
    {{--                                    <p class="float-start">Ešte nemáte účet? <a href="{{ route('register') }}">Zaregistrujte sa</a></p>--}}
    {{--                                @endif--}}

    {{--                                @if (Route::has('login'))--}}
    {{--                                    <a href="{{ route('login') }}" class="btn btn-dark float-end">Prihlásenie</a>--}}
    {{--                                @endif--}}
    {{--                        </div>--}}
    {{--                    </form>--}}
    {{--                </div>--}}
    {{--                @else--}}
    {{--                    <a href="{{ route('logout') }}"--}}
    {{--                       onclick="event.preventDefault();--}}
    {{--                                                     document.getElementById('logout-form').submit();">--}}
    {{--                        {{ __('Logout') }}--}}
    {{--                    </a>--}}

    {{--                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">--}}
    {{--                        @csrf--}}
    {{--                    </form>--}}
    {{--                @endguest--}}
    {{--            </div>--}}
    {{--        </div>--}}
    {{--    </div>--}}
</nav>


