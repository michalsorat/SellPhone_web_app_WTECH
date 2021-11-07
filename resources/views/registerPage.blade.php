@extends('layouts.app')

@section('content')

<div class="register-holder section">
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

@endsection
