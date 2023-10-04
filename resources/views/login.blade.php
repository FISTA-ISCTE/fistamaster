
@extends('layouts.app2')

@section('content')

<!-- Hero Start -->
        <!-- Login & Register Start -->
        <div class="section login-register-section section-padding-02" style="margin-top: 5%;">
            <div class="container">

                <!-- Login & Register Wrapper Start -->
                <div class="login-register-wrap">
                    <div class="row gx-5 justify-content-center">
                        <div class="col-lg-6">
                            <!-- Login & Register Box Start -->
                            <div class="login-register-box">
                                <!-- Section Title Start -->
                                <div class="section-title">
                                    <h2 class="title">Login</h2>
                                </div>
                                <!-- Section Title End -->
                                <x-validation-errors class="mb-4" />

                                @if (session('status'))
                                    <div class="mb-4 font-medium text-sm text-green-600">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                <div class="login-register-form">
                                    <form method="POST" action="{{ route('login') }}">
                                        @csrf
                                        <div class="single-form">
                                            <input type="text" style="font-weight: 400 !important;font-size:initial !important;text-transform: lowercase;" name="email" required class="form-control" placeholder="Email ">
                                        </div>
                                        <div class="single-form">
                                            <input type="password" class="form-control" name="password" required  placeholder="Password">
                                        </div>
                                        <div class="single-form form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                                            <label class="form-check-label" for="flexCheckDefault">Relembrar</label>
                                        </div>
                                        <div class="form-btn">
                                            <button class="btn">Login</button>
                                        </div>
                                        <div class="single-form">
                                            @if (Route::has('password.request'))
                                            <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                                                Esqueceste-te da tua password?
                                            </a>
                                            @endif
                                            <p><a href="/registar-user">Ainda não estás registado? <b>Regista-te</b></a></p>
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
