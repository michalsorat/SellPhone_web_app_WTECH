@extends('layouts.app')

@section('content')
    <div class="container sumarization my-5 px-5 pt-2 pb-4">
        <div class="row d-flex justify-content-center">
            @if($products)
            <div class="progress-holder col-10 mt-5">
                <div class="progress">
                    <div id="progress-bar-2" class="progress-bar" role="progressbar" aria-valuenow="50"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button type="button" class="top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill">1
                </button>
                <button type="button" class="top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill">2
                </button>
                <button type="button" class="top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill">3
                </button>
            </div>

            <div class="d-flex justify-content-between mt-2">
                <div>
                    <input type="text" readonly class="form-control-plaintext text-center" value="Sumarizácia položiek">
                </div>
                <div>
                    <input type="text" readonly class="form-control-plaintext text-center fw-bold"
                           value="Doprava a platba">
                </div>
                <div>
                    <input type="text" readonly class="form-control-plaintext text-center" value="Dodacie údaje">
                </div>
            </div>

            <div class="row">
                <div class="table-wrap col-12 col-lg-6">
                    <table class="table-small table table-responsive table-borderless">
                        <h5>Spôsob dopravy</h5>
                        <tbody>
                        <tr class="align-middle alert border-bottom">
                            <td><input type="checkbox" id="check"></td>
                            <td class="text-center"><i class="fas fa-shipping-fast"></i></td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">Doručenie na adresu</p>
                                </div>
                            </td>
                            <td> 3,99€</td>
                        </tr>
                        <tr class="align-middle alert border-bottom">
                            <td><input type="checkbox" id="check"></td>
                            <td class="text-center"><i class="fas fa-hand-holding-usd"></i></td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">Osobný odber</p>
                                </div>
                            </td>
                            <td> Zadarmo</td>
                        </tr>
                        </tr>
                        </tbody>
                    </table>

                    <table class="table-small table table-responsive table-borderless">
                        <h5>Spôsob platby</h5>
                        <tbody>
                        <tr class="align-middle alert border-bottom">
                            <td><input type="checkbox" id="check"></td>
                            <td class="text-center"><i class="fab fa-cc-visa"></i></td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">Kartou online</p>
                                </div>
                            </td>
                            <td> Zadarmo</td>
                        </tr>
                        <tr class="align-middle alert border-bottom">
                            <td><input type="checkbox" id="check"></td>
                            <td class="text-center"><i class="fas fa-wallet"></i></td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">Na dobierku</p>
                                </div>
                            </td>
                            <td> 2,99€</td>
                        </tr>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-wrap col-12 col-lg-6">
                    <table class="table-small table table-responsive table-borderless">
                        <h5>Sumár objednávky</h5>
                        <tbody>
                        @foreach($products as $product)
                        <tr class="align-middle alert border-bottom">
                            <td class="text-center">
                                @foreach($product['item']['productImages'] as $image)
                                    @if($image->main_img == true)
                                        <img src="{{ asset($image->image_src) }}" class="pic" alt="...">
                                        @break
                                    @endif
                                @endforeach
                            </td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">{{ $product['item']['name'] }}</p>
                                </div>
                            </td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">{{ $product['quantity'] }} KS</p>
                                </div>
                            <td>{{ $product['price'] }} €</td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between">
                        <div class="next-step">
                            <ul>
                                <li><a href="{{route('getShoppingCart1')}}" class="btn btn-dark btn"><- späť do košíka</a></li>
                            </ul>
                        </div>

                        <div class="next-step mt-2">
                            <ul class="text-left">
                                <li><p>Doručenie na adresu:<span>3,99€</span></p></li>
                                <li><p>Platba kartou:<span>0€</span></p></li>
                                <li><p>Cena celkom:<span>{{ $totalPrice }} €</span></p></li>
                                <li><a href="{{route('getShoppingCart3')}}" class="btn btn-dark btn">Pokračovať v objednávke</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            @else
                <div class="d-flex justify-content-center mt-auto">
                    <h3>Nemáte žiadne produkty v košíku.</h3>
                </div>
            @endif
        </div>
    </div>
@endsection
