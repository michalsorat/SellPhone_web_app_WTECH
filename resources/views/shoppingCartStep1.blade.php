@extends('layouts.app')

@section('content')
    <div class="container sumarization mt-5 px-5 ">
        <div class="row d-flex justify-content-center">
            <div class="progress-holder col-10 mt-5">
                <div class="progress">
                    <div id="progress-bar-1" class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button type="button" class="top-0 start-0 translate-middle btn btn-sm btn-primary rounded-pill">1</button>
                <button type="button" class="top-0 start-50 translate-middle btn btn-sm btn-secondary rounded-pill">2</button>
                <button type="button" class="top-0 start-100 translate-middle btn btn-sm btn-secondary rounded-pill">3</button>
            </div>

            <div class="table-wrap">
                <table class="table table-responsive table-borderless">
                    <thead>
                        <th>&nbsp;</th>
                        <th>Product</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th>total</th>
                        <th>&nbsp;</th>
                    </thead>
                    <tbody>
                        <tr class="align-middle alert border-bottom">
                            <td class="text-center"> <img class="pic" src="{{ asset('img/iphone.png') }}" alt=""> </td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">Samsung Galaxy S21, 5G 8GB/128GB</p>
                                </div>
                            </td>
                            <td>
                                <div class="fw-bold">650€</div>
                            </td>
                            <td> <input class="input" type="text"> </td>
                            <td> 650€ </td>
                            <td>
                                <div class="btn" data-bs-dismiss="alert"> <span class="fas fa-times"></span> </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection
