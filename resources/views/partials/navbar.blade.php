<div class="row g-0">
    <div class="col-4">
        <h1 id="main-header"><a href="{{ route('homepage') }}">SellPhone.sk</a></h1>
    </div>
    <div class="col-md-4 col-5">
        <form class="d-sm-flex d-none my-2 my-lg-3" action="{{ route('searchProduct') }}" method="GET">
            <input class="form-control" type="search" id="search-input" name="search_input" placeholder="Zadajte názov produktu" aria-label="Search" autocomplete="off">
            <span class="input-group-append">
            <button class="btn btn-outline-secondary" id="search-btn" type="submit">
                <i class="fa fa-search"></i>
            </button>
        </span>
        </form>
    </div>
    <script type="text/javascript">
        var path = "{{ route('autocomplete') }}";
        $('#search-input').typeahead({
            source: function (query, process) {
                return $.get(path, {query: query}, function (data) {
                    return process(data);
                });
            }
        });

        // $('#search-btn').on('click', function (e) {
        //     e.preventDefault();
        //
        //     const name = document.getElementById('search-input').value;
        //     console.log(name);
        //     $.ajax({
        //         type: 'GET',
        //         url: '/productik/',
        //         data: {
        //             name : name
        //         },
        //         async: false,
        //         dataType: 'json',
        //         success: function (response) {
        //             console.log(response);
        //         }
        //     });
        // })
        // const search_button = document.getElementById("search_btn");
    </script>
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

        <a class="btn" href="{{ route('getShoppingCart1') }}">
            <i class="fas fa-shopping-cart">
                <span class="translate-middle badge rounded-pill bg-danger">{{ Session::has('shoppingCart') ? Session::get('shoppingCart')->totalQuantity : '' }}</span>
            </i>
        </a>
    </div>
</div>

<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
    <div class="container-fluid">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
{{--        <form class="collapse navbar-collapse" id="navbarNav" action="{{ route('product.index') }}" method="GET">--}}
            <ul class="navbar-nav w-100 nav-justified">
{{--                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="apple">Apple</button></li>--}}
{{--                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="samsung">Samsung</button></li>--}}
{{--                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="huawei">Huawei</button></li>--}}
{{--                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="xiaomi">Xiaomi</button></li>--}}
{{--                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="oneplus">OnePlus</button></li>--}}
{{--                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="lg">LG</button></li>--}}
{{--                <li class="nav-item"><button class="nav-link btn" type="submit" name="category" value="accessories">Príslušenstvo</button></li>--}}
                <li class="nav-item"><a class="nav-link" href="{{ route('apple') }}">Apple</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('samsung') }}">Samsung</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('huawei') }}">Huawei</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('xiaomi') }}">Xiaomi</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('oneplus') }}">OnePlus</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('lg') }}">LG</a></li>
                <li class="nav-item"><a class="nav-link" href="{{ route('accessories') }}">Príslušenstvo</a></li>
            </ul>
{{--        </form>--}}
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
</nav>


