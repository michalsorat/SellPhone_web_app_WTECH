@extends('layouts.app')

@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img
                    src="https://images.ctfassets.net/hrltx12pl8hq/7yQR5uJhwEkRfjwMFJ7bUK/dc52a0913e8ff8b5c276177890eb0129/offset_comp_772626-opt.jpg?fit=fill&w=800&h=250"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img
                    src="https://images.ctfassets.net/hrltx12pl8hq/7yQR5uJhwEkRfjwMFJ7bUK/dc52a0913e8ff8b5c276177890eb0129/offset_comp_772626-opt.jpg?fit=fill&w=800&h=250"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img
                    src="https://images.ctfassets.net/hrltx12pl8hq/7yQR5uJhwEkRfjwMFJ7bUK/dc52a0913e8ff8b5c276177890eb0129/offset_comp_772626-opt.jpg?fit=fill&w=800&h=250"
                    class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
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
                <div class="flex-grow-1 ms-2">
                    Viac ako 20 000 spokojných zákazníkov
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="jumbotron d-flex align-items-center mb-1">
                <div class="flex-shrink-0">
                    <img src="{{ asset('img/free-return.png') }}" alt=""/>
                </div>
                <div class="flex-grow-1 ms-2">
                    Bezplatné vrátenie tovaru do 30 dní
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="jumbotron d-flex align-items-center mb-1">
                <div class="flex-shrink-0">
                    <img src="{{ asset('img/new-product.png') }}" alt=""/>
                </div>
                <div class="flex-grow-1 ms-2">
                    Záruka dodania nového tovaru
                </div>
            </div>
        </div>
        <div class="col-md-3 col-6">
            <div class="jumbotron d-flex align-items-center mb-1">
                <div class="flex-shrink-0">
                    <img src="{{ asset('img/fast-delivery.png') }}" alt=""/>
                </div>
                <div class="flex-grow-1 ms-2">
                    Expresné doručenie do 24 hodín
                </div>
            </div>
        </div>
    </div>

    <div class="card text-center mx-5 my-3">
        <div class="card-body">
            <h4 class="card-title">Mobilné telefóny a smartfóny</h4>
            <p class="card-text text-responsive">V našej ponuke nájdete najznámejšie výrobky renomovaných predajcov mobilných telefónov
                a smartfónov. Ponúkame to najlepšie na našom trhu za bekonkurenčné ceny. Naším hlavným cieľom je
                dosiahnuť najvyššiu možnú mieru spokojnosti zákazníkov a sprostredkovať prívetivé nákupné prostredie.
            </p>
        </div>
    </div>


{{--    <div class="container-fluid bg-trasparent my-4 p-3" style="position: relative;">--}}
{{--        <div class="row row-cols-1 row-cols-xs-2 row-cols-sm-2 row-cols-lg-4 g-3">--}}
{{--            <div class="col">--}}
{{--                <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/download-laptop-notebook-png-image-png-image-pngimg-2.png" class="card-img-top" alt="...">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-primary">ASUS Rog</span> <span class="float-end price-hp">12354.00€</span> </div>--}}
{{--                        <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>--}}
{{--                        <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/notebook-laptop-png-images-you-can-download-mashtrelo-14.png" class="card-img-top" alt="...">--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">12354.00€</span> <span class="float-end"><a href="#">Example</a></span> </div>--}}
{{--                        <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>--}}
{{--                        <div class="d-grid gap-2 my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/download-laptop-notebook-png-image-png-image-pngimg-2.png" class="card-img-top" alt="...">--}}
{{--                    <div class="label-top shadow-sm">Asus Rog</div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="clearfix mb-3"> <span class="float-start badge rounded-pill bg-success">12354.00€</span> <span class="float-end"><a href="#" class="small text-muted">Reviews</a></span> </div>--}}
{{--                        <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>--}}
{{--                        <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>--}}
{{--                        <div class="clearfix mb-1"> <span class="float-start"><i class="far fa-question-circle"></i></span> <span class="float-end"><i class="fas fa-plus"></i></span> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col">--}}
{{--                <div class="card h-100 shadow-sm"> <img src="https://www.freepnglogos.com/uploads/notebook-png/notebook-laptop-png-images-you-can-download-mashtrelo-14.png" class="card-img-top" alt="...">--}}
{{--                    <div class="label-top shadow-sm">DELL</div>--}}
{{--                    <div class="card-body">--}}
{{--                        <div class="clearfix mb-3"> <span class="float-start price-hp">12354.00€</span> <span class="float-end"><a class="text-muted small" href="#">Reviews</a></span> </div>--}}
{{--                        <h5 class="card-title">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Veniam quidem eaque ut eveniet aut quis rerum. Asperiores accusamus harum ducimus velit odit ut. Saepe, iste optio laudantium sed aliquam sequi.</h5>--}}
{{--                        <div class="text-center my-4"> <a href="#" class="btn btn-warning">Check offer</a> </div>--}}
{{--                        <div class="clearfix mb-1"> <span class="float-start"><i class="far fa-question-circle"></i></span> <span class="float-end"><i class="fas fa-plus"></i></span> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    <div class="container-fluid mt-3 mb-3">--}}
{{--        <div class="row g-2">--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="card">--}}
{{--                    <div class="img-container">--}}
{{--                        <div class="d-flex justify-content-between align-items-center p-2 first"> <span class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img src="https://miro.medium.com/max/1200/1*mk1-6aYaf_Bes1E3Imhc0A.jpeg" class="img-fluid">--}}
{{--                    </div>--}}
{{--                    <div class="product-detail-container">--}}
{{--                        <div class="d-flex justify-content-between align-items-center">--}}
{{--                            <h6 class="mb-0">Long sleev shirt</h6> <span class="text-danger font-weight-bold">$3.99</span>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex justify-content-between align-items-center mt-2">--}}
{{--                            <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>--}}
{{--                            <div class="size"> <label class="radio"> <input type="radio" name="size1" value="small"> <span>S</span> </label> <label class="radio"> <input type="radio" name="size1" value="Medium" checked> <span>M</span> </label> <label class="radio"> <input type="radio" name="size1" value="Large"> <span>L</span> </label> </div>--}}
{{--                        </div>--}}
{{--                        <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="card">--}}
{{--                    <div class="img-container">--}}
{{--                        <div class="d-flex justify-content-between align-items-center p-2 first"> <span class="percent">-15%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img src="https://miro.medium.com/max/1200/1*mk1-6aYaf_Bes1E3Imhc0A.jpeg" class="img-fluid">--}}
{{--                    </div>--}}
{{--                    <div class="product-detail-container">--}}
{{--                        <div class="d-flex justify-content-between align-items-center">--}}
{{--                            <h6 class="mb-0">Black top caps</h6> <span class="text-danger font-weight-bold">$1.99</span>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex justify-content-between align-items-center mt-2">--}}
{{--                            <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>--}}
{{--                            <div class="size"> <label class="radio"> <input type="radio" name="size2" value="small"> <span>S</span> </label> <label class="radio"> <input type="radio" name="size2" value="Medium" checked> <span>M</span> </label> <label class="radio"> <input type="radio" name="size2" value="Large"> <span>L</span> </label> </div>--}}
{{--                        </div>--}}
{{--                        <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="card">--}}
{{--                    <div class="img-container">--}}
{{--                        <div class="d-flex justify-content-between align-items-center p-2 first"> <span class="percent">-35%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img src="https://miro.medium.com/max/1200/1*mk1-6aYaf_Bes1E3Imhc0A.jpeg" class="img-fluid">--}}
{{--                    </div>--}}
{{--                    <div class="product-detail-container">--}}
{{--                        <div class="d-flex justify-content-between align-items-center">--}}
{{--                            <h6 class="mb-0">Kiton sui suit</h6> <span class="text-danger font-weight-bold">$3.99</span>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex justify-content-between align-items-center mt-2">--}}
{{--                            <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>--}}
{{--                            <div class="size"> <label class="radio"> <input type="radio" name="size3" value="small"> <span>S</span> </label> <label class="radio"> <input type="radio" name="size3" value="Medium" checked> <span>M</span> </label> <label class="radio"> <input type="radio" name="size3" value="Large"> <span>L</span> </label> </div>--}}
{{--                        </div>--}}
{{--                        <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="card">--}}
{{--                    <div class="img-container">--}}
{{--                        <div class="d-flex justify-content-between align-items-center p-2 first"> <span class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img src="https://miro.medium.com/max/1200/1*mk1-6aYaf_Bes1E3Imhc0A.jpeg" class="img-fluid">--}}
{{--                    </div>--}}
{{--                    <div class="product-detail-container">--}}
{{--                        <div class="d-flex justify-content-between align-items-center">--}}
{{--                            <h6 class="mb-0">Long red shirt</h6> <span class="text-danger font-weight-bold">$4.99</span>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex justify-content-between align-items-center mt-2">--}}
{{--                            <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>--}}
{{--                            <div class="size"> <label class="radio"> <input type="radio" name="size4" value="small"> <span>S</span> </label> <label class="radio"> <input type="radio" name="size4" value="Medium" checked> <span>M</span> </label> <label class="radio"> <input type="radio" name="size4" value="Large"> <span>L</span> </label> </div>--}}
{{--                        </div>--}}
{{--                        <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="card">--}}
{{--                    <div class="img-container">--}}
{{--                        <div class="d-flex justify-content-between align-items-center p-2 first"> <span class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img src="https://miro.medium.com/max/1200/1*mk1-6aYaf_Bes1E3Imhc0A.jpeg" class="img-fluid">--}}
{{--                    </div>--}}
{{--                    <div class="product-detail-container">--}}
{{--                        <div class="d-flex justify-content-between align-items-center">--}}
{{--                            <h6 class="mb-0">Long black t-shirt</h6> <span class="text-danger font-weight-bold">$3.99</span>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex justify-content-between align-items-center mt-2">--}}
{{--                            <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>--}}
{{--                            <div class="size"> <label class="radio"> <input type="radio" name="size5" value="small"> <span>S</span> </label> <label class="radio"> <input type="radio" name="size5" value="Medium" checked> <span>M</span> </label> <label class="radio"> <input type="radio" name="size5" value="Large"> <span>L</span> </label> </div>--}}
{{--                        </div>--}}
{{--                        <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--            <div class="col-md-4">--}}
{{--                <div class="card">--}}
{{--                    <div class="img-container">--}}
{{--                        <div class="d-flex justify-content-between align-items-center p-2 first"> <span class="percent">-25%</span> <span class="wishlist"><i class="fa fa-heart"></i></span> </div> <img src="https://miro.medium.com/max/1200/1*mk1-6aYaf_Bes1E3Imhc0A.jpeg" class="img-fluid">--}}
{{--                    </div>--}}
{{--                    <div class="product-detail-container">--}}
{{--                        <div class="d-flex justify-content-between align-items-center">--}}
{{--                            <h6 class="mb-0">TINONG white specs</h6> <span class="text-danger font-weight-bold">$3.99</span>--}}
{{--                        </div>--}}
{{--                        <div class="d-flex justify-content-between align-items-center mt-2">--}}
{{--                            <div class="ratings"> <i class="fa fa-star"></i> <span>4.5</span> </div>--}}
{{--                            <div class="size"> <label class="radio"> <input type="radio" name="size6" value="small"> <span>S</span> </label> <label class="radio"> <input type="radio" name="size6" value="Medium" checked> <span>M</span> </label> <label class="radio"> <input type="radio" name="size6" value="Large"> <span>L</span> </label> </div>--}}
{{--                        </div>--}}
{{--                        <div class="mt-3"> <button class="btn btn-danger btn-block">Buy Now</button> </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
@endsection
