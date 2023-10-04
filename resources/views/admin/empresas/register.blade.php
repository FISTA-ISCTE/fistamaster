
@extends('layouts.app2')

@section('content')

<!-- Hero Start -->
        <!-- Login & Register Start -->
        <div class="section login-register-section section-padding-02" style="margin-top: 5%;">
            <div class="container">

                <!-- Login & Register Wrapper Start -->
                <div class="login-register-wrap">
                    <div class="row gx-5">
                        <div class="col-lg-6">

                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="title">Login</h2>
                                </div>
                                <!-- Section Title End -->

                                <div class="login-register-form">
                                    <form action="#">
                                        <div class="single-form">
                                            <input type="text" class="form-control" placeholder="Username or email ">
                                        </div>
                                        <div class="single-form">
                                            <input type="password" class="form-control" placeholder="Password">
                                        </div>
                                        <div class="single-form form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">Relembrar</label>
                                        </div>
                                        <div class="form-btn">
                                            <button class="btn">Login</button>
                                        </div>
                                        <div class="single-form">
                                            <p><a href="#">Esqueceste-te da tua password?</a></p>
                                        </div>
                                        <div class="single-form">
                                            <p><a href="">Ainda não estás registado? Regista.</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Login & Register Box End -->

                        </div>
                        <div class="col-lg-6">

                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="title">Registar</h2>
                                </div>
                                <!-- Section Title End -->

                                <div class="login-register-form">
                                    <form action="#">
                                        <div class="single-form">
                                            <input type="text" class="form-control" placeholder="Nome">
                                        </div>
                                        <div class="single-form">
                                            <input type="text" class="form-control" placeholder="Apelido">
                                        </div>
                                        <div class="single-form">
                                            <input type="text" class="form-control" placeholder="Email ">
                                        </div>
                                        <div class="single-form">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                        </div>

                                        <div class="single-form">
                                            <select class="form-control" id="exampleFormControlSelect1">
                                              <option>1</option>
                                              <option>2</option>
                                              <option>3</option>
                                              <option>4</option>
                                              <option>5</option>
                                            </select>
                                          </div>

                                        <div class="single-form">
                                            <input type="password" class="form-control" placeholder="Password ">
                                        </div>
                                        <div class="single-form">
                                            <input type="password" class="form-control" placeholder="Confirm Password ">
                                        </div>
                                        <div class="form-btn">
                                            <button class="btn">Registar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Login & Register Box End -->

                        </div>
                    </div>
                </div>
                <!-- Login & Register Wrapper End -->

            </div>
        </div>
        <!-- Login & Register End -->


@endsection
