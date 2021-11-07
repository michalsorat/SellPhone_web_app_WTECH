@extends('layouts.app')

@section('content')
    <div class="container mt-4 mt-lg-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="container">
                    <div id="product-images-slider" class="carousel carousel-dark slide w-100 ms-auto"
                         data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#product-images-slider" data-bs-slide-to="0"
                                    class="active" aria-current="true">
                            </button>
                            <button type="button" data-bs-target="#product-images-slider" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#product-images-slider" data-bs-slide-to="2"></button>
                        </div>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img
                                    src="{{ asset('img/iphone.png') }}"
                                    class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img
                                    src="{{ asset('img/iphone.png') }}"
                                    class="d-block w-100" alt="">
                            </div>
                            <div class="carousel-item">
                                <img
                                    src="{{ asset('img/iphone.png') }}"
                                    class="d-block w-100" alt="">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#product-images-slider"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#product-images-slider"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6">
                <div class="row mx-lg-1 mx-xxl-4">
                    <div class="card border-0 mt-lg-0 mt-xxl-4 ">
                        <div class="product card-body">
                            <h2 class="product card-title">Samsung Galaxy S21, 5G 8GB/128GB</h2>
                            <p class="product card-text my-sm-3">
                                6.2" AMOLED 2400 × 1080, 120Hz, procesor Qualcomm Snapdragon 8- jadrový,
                                RAM 8GB, interná pamäť 128GB, MicroSD až 1000 GB, zadný fotoaparát 64Mpx
                                (f/1.8)+12Mpx (f/2.2)+5Mpx (f/2.4)+5Mpx (f/2.4) , predný fotoaparát 32Mpx,
                                optická stabilizácia, GPS...<a href="#">zobraziť celý popis</a>
                            </p>
                        </div>
                    </div>
                    <div class="card border-0 col-6 col-lg-4 mx-lg-4 my-sm-2 my-lg-3 px-3 px-sm-4 px-md-3 px-lg-0">
                        <div class="product prop card-body">
                            <h3 class="product prop card-title">Dostupnosť</h3>
                            <p class="product prop card-text">
                                Skladom
                            </p>
                        </div>
                    </div>
                    <div class="card border-0 col-6 col-lg-4 mx-lg-4 my-sm-2 my-lg-3 px-3 px-sm-4 px-md-3 px-lg-0">
                        <div class="product prop card-body">
                            <h3 class="product prop card-title">Záruka</h3>
                            <p class="product prop card-text">
                                2 roky
                            </p>
                        </div>
                    </div>
                    <div class="card border-0 col-6 col-lg-4 mx-lg-4 my-2 my-lg-3 px-3">
                        <div class="product price card-body">
                            <h3 class="product price card-title">999,99€</h3>
                        </div>
                    </div>
                    <button class="product btn btn-primary col-5 col-lg-4 mx-lg-4 my-3 my-lg-4 ms-3 ms-sm-4 ms-md-3 px-lg-0" type="button">
                        <i class="fas fa-cart-plus"></i>
                        Pridať do košíka
                    </button>
                </div>
            </div>
        </div>
    </div>

    <div class="product-specification-placeholder container my-4 my-lg-5">
        <div class="row specifications">
            <h2 class="specifications-title text-center mt-4 my-lg-4">
                Kompletné špecifikácie
            </h2>
            <div class="container col-10 col-lg-7 mb-5">
                <div class="row mt-2">
                    <h4 class="text-center my-3">Výkonný procesor</h4>
                    <p>
                        Procesor Qualcomm Snapdragon ponúka špičkovú energetickú účinnosť, výkon a 5G konektivitu.
                        Výkonná čipová sada umožňuje rýchlejšie pripojenie, optimalizované hranie hier a lepšie
                        spracovanie obrazu za cenu, ktorú nikde inde nenájdete.
                    </p>
                    <img src="{{ asset('img/processor.jpg') }}" alt="">
                </div>
                <div class="row mt-4">
                    <h4 class="text-center my-3">Displej</h4>
                    <p>
                        Impozantný 6,2 palcový Infinity-O displej Galaxy S21 5G prináša živé detaily aj za jasného svetla. Eye
                        Comfort Shield2 znižuje vyžarovanie modrého svetla a Real Smooth udržuje hladký obraz, či už
                        hráte alebo scrollujete.
                    </p>
                    <img src="{{ asset('img/display.jpg') }}" alt="">
                </div>
                <div class="row mt-4">
                    <h4 class="text-center my-3">Výdrž</h4>
                    <p>
                        Batéria s vysokou kapacitou 4 000 mAh zaisťuje dlhú výdrž. Určite oceníte aj podporu rýchleho
                        nabíjania, ktorej zásluhou dodáte 100 % energie za iba 59 minút.
                    </p>
                    <img src="{{ asset('img/battery.png') }}" alt="">
                </div>
            </div>

            <div class="tech-parameters-placeholder container col-9 col-lg-4 mt-3 mb-5 pb-4">
                <h3 class="params-title text-center my-4">Technické parametre</h3>
                <div class="params-category d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2 mt-2">
                    <span>Displej</span>
                </div>
                <div class="params-value d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2">
                    <span>Uhlopriečka displeja:</span>
                    <span>6,2"</span>
                </div>
                <div class="params-value d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2">
                    <span>Rozlíšenie displeja:</span>
                    <span>2400 x 1080 px</span>
                </div>
                <div class="params-value d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2">
                    <span>Typ displeja</span>
                    <span>AMOLED</span>
                </div>

                <div class="params-category d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2 mt-5">
                    <span>Výkon a výdrž</span>
                </div>
                <div class="params-value d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2">
                    <span>Počet jadier procesora:</span>
                    <span>8</span>
                </div>
                <div class="params-value d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2">
                    <span>Frekvencia procesora:</span>
                    <span>2,91 GHz</span>
                </div>
                <div class="params-value d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2">
                    <span>Operačná pamäť:</span>
                    <span>8 GB</span>
                </div>
                <div class="params-value d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2">
                    <span>Kapacita batérie:</span>
                    <span>4000 mAh</span>
                </div>

                <div class="params-category d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2 mt-5">
                    <span>Fotoaparát</span>
                </div>
                <div class="params-value d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2">
                    <span>Rozlíšenie zadného fotoaparátu:</span>
                    <span>12+64+12 Mpx</span>
                </div>
                <div class="params-value d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2">
                    <span>Rozlíšenie predného fotoaparátu:</span>
                    <span>10 Mpx</span>
                </div>
                <div class="params-value d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2">
                    <span>Maximálne rozlíšenie videa:</span>
                    <span>8K Ultra HD</span>
                </div>

                <div class="params-category d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2 mt-5">
                    <span>Softvér a pripojenie</span>
                </div>
                <div class="params-value d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2">
                    <span>Operačný systém:</span>
                    <span>Android 11</span>
                </div>
                <div class="params-value d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2">
                    <span>Konektor:</span>
                    <span>USB-C</span>
                </div>
                <div class="params-value d-flex justify-content-between border-bottom border-1 border-primary mx-2 my-2">
                    <span>Sieťové pripojenie:</span>
                    <span>5G</span>
                </div>
            </div>
        </div>
    </div>
@endsection
