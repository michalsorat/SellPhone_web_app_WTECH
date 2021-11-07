@extends('layouts.app')

@section('content')
    <div id="homepage-slider" class="carousel carousel-dark slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#homepage-slider" data-bs-slide-to="0" class="active" aria-current="true">
            </button>
            <button type="button" data-bs-target="#homepage-slider" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#homepage-slider" data-bs-slide-to="2"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="{{ asset('img/slider.png') }}"
                    class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img
                    src="{{ asset('img/slider.png') }}"
                    class="d-block w-100" alt="">
            </div>
            <div class="carousel-item">
                <img
                    src="{{ asset('img/slider.png') }}"
                    class="d-block w-100" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#homepage-slider"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#homepage-slider"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <div class="row mx-1">
        <div class="col-md-3 col-6">
            <div class="jumbotron d-flex align-items-center mb-1">
                <div class="flex-shrink-0">
                    <img src="{{ asset('img/good-reviews.png') }}" alt=""/>
                </div>
                <div class="flex-grow-1 ms-2 ms-xl-3 ms-xxl-4">
                    Viac ako 20 000 spokojných zákazníkov
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="jumbotron d-flex align-items-center mb-1">
                <div class="flex-shrink-0">
                    <img src="{{ asset('img/free-return.png') }}" alt=""/>
                </div>
                <div class="flex-grow-1 ms-2 ms-xl-3 ms-xxl-4">
                    Bezplatné vrátenie tovaru do 30 dní
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="jumbotron d-flex align-items-center mb-1">
                <div class="flex-shrink-0">
                    <img src="{{ asset('img/new-product.png') }}" alt=""/>
                </div>
                <div class="flex-grow-1 ms-2 ms-xl-3 ms-xxl-4">
                    Záruka dodania nového tovaru
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="jumbotron d-flex align-items-center mb-1">
                <div class="flex-shrink-0">
                    <img src="{{ asset('img/fast-delivery.png') }}" alt=""/>
                </div>
                <div class="flex-grow-1 ms-2 ms-xl-3 ms-xxl-4">
                    Expresné doručenie do 24 hodín
                </div>
            </div>
        </div>
    </div>

    <div class="card text-center mx-3 my-2 my-xxl-3">
        <div class="card-body">
            <h2 class="card-title">Mobilné telefóny a smartfóny</h2>
            <p class="card-text">V našej ponuke nájdete najznámejšie výrobky renomovaných predajcov mobilných telefónov
                a smartfónov. Ponúkame to najlepšie na našom trhu za bekonkurenčné ceny. Naším hlavným cieľom je
                dosiahnuť najvyššiu možnú mieru spokojnosti zákazníkov a sprostredkovať prívetivé nákupné prostredie.
            </p>
        </div>
    </div>

    <div class="container bg-trasparent list-items-homepage mb-5">
        <div class="row">
            <div class="header-holder text-center col-12">
                <h4>Top produkty</h4>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="list-item card">
                    <img src="{{ asset('img/iphone.png') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-0">
                        <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>
                        <div class="d-flex justify-content-between mx-4">
                            <div class="price">
                                <span>999,99€</span>
                            </div>
                            <div class="shopping-cart">
                                <button class="btn" type="button">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="list-item card">
                    <img src="{{ asset('img/iphone.png') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-0">
                        <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>
                        <div class="d-flex justify-content-between mx-4">
                            <div class="price">
                                <span>999,99€</span>
                            </div>
                            <div class="shopping-cart">
                                <button class="btn" type="button">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="list-item card">
                    <img src="{{ asset('img/iphone.png') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-0">
                        <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>
                        <div class="d-flex justify-content-between mx-4">
                            <div class="price">
                                <span>999,99€</span>
                            </div>
                            <div class="shopping-cart">
                                <button class="btn" type="button">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="list-item card">
                    <img src="{{ asset('img/iphone.png') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-0">
                        <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>
                        <div class="d-flex justify-content-between mx-4">
                            <div class="price">
                                <span>999,99€</span>
                            </div>
                            <div class="shopping-cart">
                                <button class="btn" type="button">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-holder text-center col-12">
                <h4>Super cena</h4>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="list-item card">
                    <img src="{{ asset('img/iphone.png') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-0">
                        <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>
                        <div class="d-flex justify-content-between mx-4">
                            <div class="price">
                                <span>999,99€</span>
                            </div>
                            <div class="shopping-cart">
                                <button class="btn" type="button">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="list-item card">
                    <img src="{{ asset('img/iphone.png') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-0">
                        <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>
                        <div class="d-flex justify-content-between mx-4">
                            <div class="price">
                                <span>999,99€</span>
                            </div>
                            <div class="shopping-cart">
                                <button class="btn" type="button">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="list-item card">
                    <img src="{{ asset('img/iphone.png') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-0">
                        <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>
                        <div class="d-flex justify-content-between mx-4">
                            <div class="price">
                                <span>999,99€</span>
                            </div>
                            <div class="shopping-cart">
                                <button class="btn" type="button">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="list-item card">
                    <img src="{{ asset('img/iphone.png') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-0">
                        <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>
                        <div class="d-flex justify-content-between mx-4">
                            <div class="price">
                                <span>999,99€</span>
                            </div>
                            <div class="shopping-cart">
                                <button class="btn" type="button">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-holder text-center col-12">
                <h4>Akcia</h4>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="list-item card">
                    <img src="{{ asset('img/iphone.png') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-0">
                        <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>
                        <div class="d-flex justify-content-between mx-4">
                            <div class="price">
                                <span>999,99€</span>
                            </div>
                            <div class="shopping-cart">
                                <button class="btn" type="button">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="list-item card">
                    <img src="{{ asset('img/iphone.png') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-0">
                        <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>
                        <div class="d-flex justify-content-between mx-4">
                            <div class="price">
                                <span>999,99€</span>
                            </div>
                            <div class="shopping-cart">
                                <button class="btn" type="button">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="list-item card">
                    <img src="{{ asset('img/iphone.png') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-0">
                        <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>
                        <div class="d-flex justify-content-between mx-4">
                            <div class="price">
                                <span>999,99€</span>
                            </div>
                            <div class="shopping-cart">
                                <button class="btn" type="button">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6 col-12">
                <div class="list-item card">
                    <img src="{{ asset('img/iphone.png') }}" class="card-img-top" alt="...">
                    <div class="card-body pt-0">
                        <h5 class="card-title text-center mb-4">Samsung galaxy S21</h5>
                        <div class="d-flex justify-content-between mx-4">
                            <div class="price">
                                <span>999,99€</span>
                            </div>
                            <div class="shopping-cart">
                                <button class="btn" type="button">
                                    <i class="fas fa-cart-plus"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
