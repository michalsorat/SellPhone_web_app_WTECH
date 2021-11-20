@extends('layouts.app')

@section('content')
    <div class="card text-center mx-5 my-3">
        <div class="card-body">
            <h4 class="card-title">Apple smartfóny</h4>
            <p class="card-text text-responsive">V našej ponuke nájdete výrobky renomovaného predajcu mobilných
                telefónov a smartfónov Apple. Ponúkame to najlepšie na našom trhu za
                bekonkurenčné ceny. Naším hlavným cieľom je dosiahnuť najvyššiu možnú mieru spokojnosti zákazníkov a
                sprostredkovať prívetivé nákupné prostredie.
            </p>
        </div>
    </div>

    <div class="container-fluid mt-4">
        <div class="d-flex justify-content-end me-5">
            <label class="align-self-center me-3" for="orderBy">Zoradiť podľa</label>
            <div>
                <select id="orderBy" class="form-select">
                    <option selected value="1">Najpredávanejšie</option>
                    <option value="2">Novinky</option>
                    <option value="2">Najlacnejšie</option>
                    <option value="3">Najdrahšie</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-3 col-xl-2 col-12">
                <div class="container border-bottom mt-4">
                    <div class="text-uppercase d-flex align-items-center">Cena
                        <button class="btn ms-auto" type="button" data-bs-toggle="collapse"
                                data-bs-target="#price-range"
                                aria-expanded="false" aria-controls="avail-choices">
                            <span
                                class="fas fa-plus">
                            </span>
                        </button>
                    </div>
                    <div id="price-range" class="collapse">
                        <div class="row mt-3 mb-4">
                            <div class="col-6 pe-1 ps-0">
                                <div class="form-floating">
                                    <input id="min-price" class="form-control" name="minPrice" value="" readonly>
                                    <label for="min-price">Od:</label>
                                </div>
                            </div>
                            <div class="col-6 ps-1 pe-0">
                                <div class="form-floating">
                                    <input id="max-price" class="form-control" name="maxPrice" value="" readonly>
                                    <label for="max-price">Do:</label>
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div id="slider-range"></div>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="container border-bottom mt-4">
                    <div class="text-uppercase d-flex align-items-center">Dostupnosť
                        <button class="btn ms-auto" type="button" data-bs-toggle="collapse"
                                data-bs-target="#avail-choices"
                                aria-expanded="false" aria-controls="avail-choices">
                            <span
                                class="fas fa-plus">
                            </span>
                        </button>
                    </div>
                    <div id="avail-choices" class="collapse">
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="inStock" id="inStock">
                            <label class="form-check-label" for="inStock">
                                Skladom
                            </label>
                        </div>
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="onOrder" id="onOrder">
                            <label class="form-check-label" for="onOrder">
                                Na objednávku
                            </label>
                        </div>
                    </div>
                </div>

                <div class="container border-bottom mt-4">
                    <div class="text-uppercase d-flex align-items-center">Uhlopriečka
                        <button class="btn ms-auto" type="button" data-bs-toggle="collapse"
                                data-bs-target="#screen-size-choices"
                                aria-expanded="false" aria-controls="screen-size-choices">
                            <span
                                class="fas fa-plus">
                            </span>
                        </button>
                    </div>
                    <div id="screen-size-choices" class="collapse">
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="screeSize1" id="screen-size-1">
                            <label class="form-check-label" for="screen-size-1">
                                4" až 4,9"
                            </label>
                        </div>
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="screeSize2" id="screen-size-2">
                            <label class="form-check-label" for="screen-size-2">
                                5" až 5,9"
                            </label>
                        </div>
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="screeSize3" id="screen-size-3">
                            <label class="form-check-label" for="screen-size-3">
                                6" a viac
                            </label>
                        </div>
                    </div>
                </div>

                <div class="container border-bottom mt-4">
                    <div class="text-uppercase d-flex align-items-center">Operačná pamäť
                        <button class="btn ms-auto" type="button" data-bs-toggle="collapse"
                                data-bs-target="#ram-choices"
                                aria-expanded="false" aria-controls="ram-choices">
                            <span
                                class="fas fa-plus">
                            </span>
                        </button>
                    </div>
                    <div id="ram-choices" class="collapse">
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="ram1" id="ram-1">
                            <label class="form-check-label" for="ram-1">
                                12 GB
                            </label>
                        </div>
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="ram2" id="ram-2">
                            <label class="form-check-label" for="ram-2">
                                8 GB
                            </label>
                        </div>
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="ram3" id="ram-3">
                            <label class="form-check-label" for="ram-3">
                                4 GB
                            </label>
                        </div>
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="ram4" id="ram-4">
                            <label class="form-check-label" for="ram-4">
                                < 4 GB
                            </label>
                        </div>
                    </div>
                </div>

                <div class="container border-bottom mt-4">
                    <div class="text-uppercase d-flex align-items-center">Interná pamäť
                        <button class="btn ms-auto" type="button" data-bs-toggle="collapse"
                                data-bs-target="#hdd-choices"
                                aria-expanded="false" aria-controls="hdd-choices">
                            <span
                                class="fas fa-plus">
                            </span>
                        </button>
                    </div>
                    <div id="hdd-choices" class="collapse">
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="hdd1" id="hdd-1">
                            <label class="form-check-label" for="hdd-1">
                                512 GB
                            </label>
                        </div>
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="hdd2" id="hdd-2">
                            <label class="form-check-label" for="hdd-2">
                                256 GB
                            </label>
                        </div>
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="hdd3" id="hdd-3">
                            <label class="form-check-label" for="hdd-3">
                                128 GB
                            </label>
                        </div>
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="hdd4" id="hdd-4">
                            <label class="form-check-label" for="hdd-4">
                                64 GB
                            </label>
                        </div>
                        <div class="form-check my-1">
                            <input class="form-check-input" type="checkbox" name="hdd5" id="hdd-5">
                            <label class="form-check-label" for="hdd-5">
                                < 64 GB
                            </label>
                        </div>
                    </div>
                </div>

                <div class="d-flex justify-content-center mt-4">
                    <button class="btn btn-dark w-75" type="submit">Použiť</button>
                </div>
            </div>

            {{--            <div class="product-list col-sm-8 col-md-9 col-xl-10 col-12 pe-5">--}}
            {{--                <div class="bg-transparent list-items">--}}
            {{--                    <div class="row">--}}
            {{--                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">--}}
            {{--                            <a class="list-item card" href="#">--}}
            {{--                                <img--}}
            {{--                                    src="{{ asset('img/iphone.png') }}"--}}
            {{--                                    class="card-img-top" alt="...">--}}
            {{--                                <div class="card-body pt-0">--}}
            {{--                                    <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>--}}
            {{--                                    <div class="d-flex justify-content-between mx-4">--}}
            {{--                                        <div class="price">--}}
            {{--                                            <span>999,99€</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="shopping-cart">--}}
            {{--                                            <button class="btn" type="button">--}}
            {{--                                                <i class="fas fa-cart-plus"></i>--}}
            {{--                                            </button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">--}}
            {{--                            <a class="list-item card" href="#">--}}
            {{--                                <img--}}
            {{--                                    src="{{ asset('img/iphone.png') }}"--}}
            {{--                                    class="card-img-top" alt="...">--}}
            {{--                                <div class="card-body pt-0">--}}
            {{--                                    <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>--}}
            {{--                                    <div class="d-flex justify-content-between mx-4">--}}
            {{--                                        <div class="price">--}}
            {{--                                            <span>999,99€</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="shopping-cart">--}}
            {{--                                            <button class="btn" type="button">--}}
            {{--                                                <i class="fas fa-cart-plus"></i>--}}
            {{--                                            </button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">--}}
            {{--                            <a class="list-item card" href="#">--}}
            {{--                                <img--}}
            {{--                                    src="{{ asset('img/iphone.png') }}"--}}
            {{--                                    class="card-img-top" alt="...">--}}
            {{--                                <div class="card-body pt-0">--}}
            {{--                                    <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>--}}
            {{--                                    <div class="d-flex justify-content-between mx-4">--}}
            {{--                                        <div class="price">--}}
            {{--                                            <span>999,99€</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="shopping-cart">--}}
            {{--                                            <button class="btn" type="button">--}}
            {{--                                                <i class="fas fa-cart-plus"></i>--}}
            {{--                                            </button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">--}}
            {{--                            <a class="list-item card" href="#">--}}
            {{--                                <img--}}
            {{--                                    src="{{ asset('img/iphone.png') }}"--}}
            {{--                                    class="card-img-top" alt="...">--}}
            {{--                                <div class="card-body pt-0">--}}
            {{--                                    <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>--}}
            {{--                                    <div class="d-flex justify-content-between mx-4">--}}
            {{--                                        <div class="price">--}}
            {{--                                            <span>999,99€</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="shopping-cart">--}}
            {{--                                            <button class="btn" type="button">--}}
            {{--                                                <i class="fas fa-cart-plus"></i>--}}
            {{--                                            </button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}

            {{--                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">--}}
            {{--                            <a class="list-item card" href="#">--}}
            {{--                                <img--}}
            {{--                                    src="{{ asset('img/iphone.png') }}"--}}
            {{--                                    class="card-img-top" alt="...">--}}
            {{--                                <div class="card-body pt-0">--}}
            {{--                                    <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>--}}
            {{--                                    <div class="d-flex justify-content-between mx-4">--}}
            {{--                                        <div class="price">--}}
            {{--                                            <span>999,99€</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="shopping-cart">--}}
            {{--                                            <button class="btn" type="button">--}}
            {{--                                                <i class="fas fa-cart-plus"></i>--}}
            {{--                                            </button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">--}}
            {{--                            <a class="list-item card" href="#">--}}
            {{--                                <img--}}
            {{--                                    src="{{ asset('img/iphone.png') }}"--}}
            {{--                                    class="card-img-top" alt="...">--}}
            {{--                                <div class="card-body pt-0">--}}
            {{--                                    <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>--}}
            {{--                                    <div class="d-flex justify-content-between mx-4">--}}
            {{--                                        <div class="price">--}}
            {{--                                            <span>999,99€</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="shopping-cart">--}}
            {{--                                            <button class="btn" type="button">--}}
            {{--                                                <i class="fas fa-cart-plus"></i>--}}
            {{--                                            </button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">--}}
            {{--                            <a class="list-item card" href="#">--}}
            {{--                                <img--}}
            {{--                                    src="{{ asset('img/iphone.png') }}"--}}
            {{--                                    class="card-img-top" alt="...">--}}
            {{--                                <div class="card-body pt-0">--}}
            {{--                                    <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>--}}
            {{--                                    <div class="d-flex justify-content-between mx-4">--}}
            {{--                                        <div class="price">--}}
            {{--                                            <span>999,99€</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="shopping-cart">--}}
            {{--                                            <button class="btn" type="button">--}}
            {{--                                                <i class="fas fa-cart-plus"></i>--}}
            {{--                                            </button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">--}}
            {{--                            <a class="list-item card" href="#">--}}
            {{--                                <img--}}
            {{--                                    src="{{ asset('img/iphone.png') }}"--}}
            {{--                                    class="card-img-top" alt="...">--}}
            {{--                                <div class="card-body pt-0">--}}
            {{--                                    <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>--}}
            {{--                                    <div class="d-flex justify-content-between mx-4">--}}
            {{--                                        <div class="price">--}}
            {{--                                            <span>999,99€</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="shopping-cart">--}}
            {{--                                            <button class="btn" type="button">--}}
            {{--                                                <i class="fas fa-cart-plus"></i>--}}
            {{--                                            </button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}

            {{--                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">--}}
            {{--                            <a class="list-item card" href="#">--}}
            {{--                                <img--}}
            {{--                                    src="{{ asset('img/iphone.png') }}"--}}
            {{--                                    class="card-img-top" alt="...">--}}
            {{--                                <div class="card-body pt-0">--}}
            {{--                                    <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>--}}
            {{--                                    <div class="d-flex justify-content-between mx-4">--}}
            {{--                                        <div class="price">--}}
            {{--                                            <span>999,99€</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="shopping-cart">--}}
            {{--                                            <button class="btn" type="button">--}}
            {{--                                                <i class="fas fa-cart-plus"></i>--}}
            {{--                                            </button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">--}}
            {{--                            <a class="list-item card" href="#">--}}
            {{--                                <img--}}
            {{--                                    src="{{ asset('img/iphone.png') }}"--}}
            {{--                                    class="card-img-top" alt="...">--}}
            {{--                                <div class="card-body pt-0">--}}
            {{--                                    <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>--}}
            {{--                                    <div class="d-flex justify-content-between mx-4">--}}
            {{--                                        <div class="price">--}}
            {{--                                            <span>999,99€</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="shopping-cart">--}}
            {{--                                            <button class="btn" type="button">--}}
            {{--                                                <i class="fas fa-cart-plus"></i>--}}
            {{--                                            </button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">--}}
            {{--                            <a class="list-item card" href="#">--}}
            {{--                                <img--}}
            {{--                                    src="{{ asset('img/iphone.png') }}"--}}
            {{--                                    class="card-img-top" alt="...">--}}
            {{--                                <div class="card-body pt-0">--}}
            {{--                                    <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>--}}
            {{--                                    <div class="d-flex justify-content-between mx-4">--}}
            {{--                                        <div class="price">--}}
            {{--                                            <span>999,99€</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="shopping-cart">--}}
            {{--                                            <button class="btn" type="button">--}}
            {{--                                                <i class="fas fa-cart-plus"></i>--}}
            {{--                                            </button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                        <div class="col-12 col-md-6 col-lg-4 col-xl-3">--}}
            {{--                            <a class="list-item card" href="#">--}}
            {{--                                <img--}}
            {{--                                    src="{{ asset('img/iphone.png') }}"--}}
            {{--                                    class="card-img-top" alt="...">--}}
            {{--                                <div class="card-body pt-0">--}}
            {{--                                    <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>--}}
            {{--                                    <div class="d-flex justify-content-between mx-4">--}}
            {{--                                        <div class="price">--}}
            {{--                                            <span>999,99€</span>--}}
            {{--                                        </div>--}}
            {{--                                        <div class="shopping-cart">--}}
            {{--                                            <button class="btn" type="button">--}}
            {{--                                                <i class="fas fa-cart-plus"></i>--}}
            {{--                                            </button>--}}
            {{--                                        </div>--}}
            {{--                                    </div>--}}
            {{--                                </div>--}}
            {{--                            </a>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                    <div class="row">--}}
            {{--                        <div class="col-12">--}}
            {{--                            <ul class="pagination justify-content-end">--}}
            {{--                                <li class="page-item disabled">--}}
            {{--                                    <a class="page-link" href="#">Predchádzajúca stránka</a>--}}
            {{--                                </li>--}}
            {{--                                <li class="page-item">--}}
            {{--                                    <a class="page-link" href="#">Ďalšia stránka</a>--}}
            {{--                                </li>--}}
            {{--                            </ul>--}}
            {{--                        </div>--}}
            {{--                    </div>--}}
            {{--                </div>--}}
            {{--            </div>--}}
        </div>
    </div>
    <script>
        $(function () {
            $("#slider-range").slider({
                range: true,
                min: 0,
                max: 1500,
                values: [250, 1250],
                slide: function (event, ui) {
                    $("#min-price").val(ui.values[0] + " €");
                    $("#max-price").val(ui.values[1] + " €");
                }
            });
        });
    </script>
@endsection
