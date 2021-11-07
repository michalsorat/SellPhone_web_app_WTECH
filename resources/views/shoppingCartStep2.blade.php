@extends('layouts.app')

@section('content')
    <div class="container sumarization mt-5 px-5 pt-2 pb-4">
        <div class="row d-flex justify-content-center">
            <div class="progress-holder col-10 mt-5">
                <div class="progress">
                    <div id="progress-bar-1" class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button type="button" class="top-0 start-0 translate-middle btn btn-sm btn-secondary rounded-pill">1</button>
                <button type="button" class="top-0 start-50 translate-middle btn btn-sm btn-primary rounded-pill">2</button>
                <button type="button" class="top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill">3</button>
            </div>

            <div class="d-flex justify-content-between mt-2">
                <div>
                    <input type="text" readonly class="form-control-plaintext text-center"  value="Sumarizácia položiek">
                </div>
                <div>
                    <input type="text" readonly class="form-control-plaintext text-center fw-bold"  value="Doprava a platba">
                </div>
                <div>
                    <input type="text" readonly class="form-control-plaintext text-center"  value="Dodacie údaje">
                </div>
            </div>

            <div class="row">
                <div class="table-wrap col-12 col-lg-6">
                    <table class="table table-responsive table-borderless">
                        <div>Sumár objednávky</div>
                        <tbody>
                        <tr class="align-middle alert border-bottom">
                            <td class="text-center"> <img class="pic" src="{{ asset('img/iphone.png') }}" alt=""> </td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">Samsung Galaxy S21, 5G 8GB/128GB</p>
                                </div>
                            </td>
                            <td> <input type="text" readonly class="form-control-plaintext" value="1 KS"></td>
                            <td> 650€ </td>
                        </tr>
                        <tr class="align-middle alert border-bottom">
                            <td class="text-center"> <img class="pic" src="{{ asset('img/iphone.png') }}" alt=""> </td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">iPhone X 256 GB</p>
                                </div>
                            </td>
                            <td> <input type="text" readonly class="form-control-plaintext" value="1 KS"></td>
                            <td> 850€ </td>
                        </tr>
                        </tbody>
                    </table>
                </div>

                <div class="table-wrap col-12 col-lg-6">
                    <table class="table-small table table-responsive table-borderless">
                        <div>Sumár objednávky</div>
                        <tbody>
                        <tr class="align-middle alert border-bottom">
                            <td class="text-center"> <img class="pic" src="{{ asset('img/iphone.png') }}" alt=""> </td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">Samsung Galaxy S21, 5G 8GB/128GB</p>
                                </div>
                            </td>
                            <td> <input type="text" readonly class="form-control-plaintext" value="1 KS"></td>
                            <td> 650€ </td>
                        </tr>
                        <tr class="align-middle alert border-bottom">
                            <td class="text-center"> <img class="pic" src="{{ asset('img/iphone.png') }}" alt=""> </td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">iPhone X 256 GB</p>
                                </div>
                            </td>
                            <td> <input type="text" readonly class="form-control-plaintext" value="1 KS"></td>
                            <td> 850€ </td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>



            <div class="next-step">
                <ul class="float-end text-center">
                    <li><p>Cena celkom:<span>1500€</span></p></li>
                    <li><button type="button" class="btn btn-dark btn">Pokračovať v objednávke</button></li>
                </ul>
            </div>
        </div>
    </div>
@endsection
