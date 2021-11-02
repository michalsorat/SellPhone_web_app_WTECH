@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://images.ctfassets.net/hrltx12pl8hq/7yQR5uJhwEkRfjwMFJ7bUK/dc52a0913e8ff8b5c276177890eb0129/offset_comp_772626-opt.jpg?fit=fill&w=800&h=300" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.ctfassets.net/hrltx12pl8hq/7yQR5uJhwEkRfjwMFJ7bUK/dc52a0913e8ff8b5c276177890eb0129/offset_comp_772626-opt.jpg?fit=fill&w=800&h=300" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://images.ctfassets.net/hrltx12pl8hq/7yQR5uJhwEkRfjwMFJ7bUK/dc52a0913e8ff8b5c276177890eb0129/offset_comp_772626-opt.jpg?fit=fill&w=800&h=300" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

{{--    <div class="row md-2 mx-3">--}}
{{--        <div class="col-md-3 col-sm-6">--}}
{{--            <div class="jumbotron">Box1</div>--}}
{{--        </div>--}}
{{--        <div class="col-md-3 col-sm-6">--}}
{{--            <div class="jumbotron">Box2</div>--}}
{{--        </div>--}}
{{--        <div class="col-md-3 col-sm-6">--}}
{{--            <div class="jumbotron">Box3</div>--}}
{{--        </div>--}}
{{--        <div class="col-md-3 col-sm-6">--}}
{{--            <div class="jumbotron">Box4</div>--}}
{{--        </div>--}}
{{--    </div>--}}

    <div class="row m-3">
        <div class="col-lg-3 col-6">
            <div class="jumbotron d-flex my-auto">
                <img src="{{ asset('img/good-reviews.png') }}" alt=""/>
                <h6>Viac ako 20 000 spokojných zákazníkov</h6>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="jumbotron d-flex my-auto">
                <img src="{{ asset('img/free-return.png') }}" alt=""/>
                <h6>Bezplatné vrátenie tovaru do 30 dní</h6>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="jumbotron d-flex my-auto">
                <img src="{{ asset('img/new-product.png') }}" alt=""/>
                <h6>Záruka dodania nového zapečateného tovaru</h6>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <div class="jumbotron d-flex my-auto">
                <img src="{{ asset('img/fast-delivery.png') }}" alt=""/>
                <h6>Expresné doručenie do 24 hodín</h6>
            </div>
        </div>
    </div>
@endsection
