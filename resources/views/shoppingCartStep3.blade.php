@extends('layouts.app')

@section('content')
    <div class="container sumarization mt-5 px-5 pt-2 pb-4">
        <div class="row d-flex justify-content-center">
            <div class="progress-holder col-10 mt-5">
                <div class="progress">
                    <div id="progress-bar-1" class="progress-bar" role="progressbar" aria-valuenow="50"
                         aria-valuemin="0" aria-valuemax="100"></div>
                </div>
                <button type="button" class="top-0 start-0 translate-middle btn btn-sm btn-secondary rounded-pill">1
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
                <div class="register-holder col-12 col-lg-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-6 offset-lg-3 col-md-10 offset-md-1 col-12">
                                <div class="register-form">
                                    <div class="title">
                                        <h4>Nemáte účet? Zaregistrujte sa.</h4>
                                        <p>Registrácia trvá menej ako minútu a vďaka nej budete mať plnú kontrolu nad Vašimi objednávkami</p>
                                    </div>
                                    <form class="row" method="POST">
                                        <div class="reg-param col-sm-6">
                                            <div class="form-group">
                                                <label for="reg-fn">Meno</label>
                                                <input class="form-control" type="text" id="reg-fn" required>
                                            </div>
                                        </div>
                                        <div class="reg-param col-sm-6">
                                            <div class="form-group">
                                                <label for="reg-ln">Priezvisko</label>
                                                <input class="form-control" type="text" id="reg-ln" required>
                                            </div>
                                        </div>
                                        <div class="reg-param col-12">
                                            <div class="form-group">
                                                <label for="reg-email">E-mailová adresa</label>
                                                <input class="form-control" type="email" id="reg-email" required>
                                            </div>
                                        </div>
                                        <div class="reg-param col-sm-6">
                                            <div class="form-group">
                                                <label for="reg-street">Ulica</label>
                                                <input class="form-control" type="text" id="reg-street" required>
                                            </div>
                                        </div>
                                        <div class="reg-param col-sm-6">
                                            <div class="form-group">
                                                <label for="reg-street-nr">Orientačné číslo</label>
                                                <input class="form-control" type="text" id="reg-street-nr" required>
                                            </div>
                                        </div>
                                        <div class="reg-param col-sm-6">
                                            <div class="form-group">
                                                <label for="reg-city">Mesto</label>
                                                <input class="form-control" type="text" id="reg-city" required>
                                            </div>
                                        </div>
                                        <div class="reg-param col-sm-6">
                                            <div class="form-group">
                                                <label for="reg-psc">PSČ</label>
                                                <input class="form-control" type="password" id="reg-psc" required>
                                            </div>
                                        </div>
                                        <div class="reg-param col-sm-6">
                                            <div class="form-group">
                                                <label for="reg-pass">Heslo</label>
                                                <input class="form-control" type="password" id="reg-pass" required>
                                            </div>
                                        </div>
                                        <div class="reg-param col-sm-6">
                                            <div class="form-group">
                                                <label for="reg-pass-confirm">Heslo znova</label>
                                                <input class="form-control" type="password" id="reg-pass-confirm" required>
                                            </div>
                                        </div>
                                        <div class="button">
                                            <button class="reg-btn btn btn-dark" type="submit">Registrovať</button>
                                        </div>
                                        <p class="outer-link">Already have an account? <a href="#">Login Now</a>
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="table-wrap col-12 col-lg-6">
                    <table class="table-small table table-responsive table-borderless">
                        <h5>Sumár objednávky</h5>
                        <tbody>
                        <tr class="align-middle alert border-bottom">
                            <td class="text-center"><img class="pic" src="{{ asset('img/iphone.png') }}" alt=""></td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">Samsung Galaxy S21, 5G 8GB/128GB</p>
                                </div>
                            </td>
                            <td><input type="text" readonly class="form-control-plaintext" value="1 KS"></td>
                            <td> 650€</td>
                        </tr>
                        <tr class="align-middle alert border-bottom">
                            <td class="text-center"><img class="pic" src="{{ asset('img/iphone.png') }}" alt=""></td>
                            <td>
                                <div>
                                    <p class="m-0 fw-bold">iPhone X 256 GB</p>
                                </div>
                            </td>
                            <td><input type="text" readonly class="form-control-plaintext" value="1 KS"></td>
                            <td> 850€</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between">
                        <div class="next-step">
                            <ul>
                                <button type="button" class="btn btn-dark btn"><- späť do košíka</button>
                            </ul>
                        </div>

                        <div class="next-step mt-2">
                            <ul class="text-left">
                                <li><p>Doručenie na adresu:<span>3,99€</span></p></li>
                                <li><p>Platba kartou:<span>0€</span></p></li>
                                <li><p>Cena celkom:<span>1503,99€</span></p></li>
                                <li>
                                    <button type="button" class="btn btn-dark btn">Pokračovať v objednávke</button>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
