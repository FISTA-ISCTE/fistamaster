@extends('layouts.app2')

@section('content')
    <!-- Hero Start -->
    <!-- Login & Register Start -->
    <div class="section login-register-section section-padding-02" style="margin-top: 5%;">
        <div class="container">
            <x-validation-errors class="mb-4" />
            <!-- Login & Register Wrapper Start -->
            <div class="login-register-wrap">
                <div class="row gx-5 justify-content-center">
                    <div class="col-lg-6">
                        <!-- Login & Register Box Start -->
                        <div class="login-register-box">
                            <!-- Section Title Start -->
                            <div class="section-title">
                                <h2 class="title">Registar</h2>
                            </div>
                            <!-- Section Title End -->

                            <div class="login-register-form">
                                <form method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <div class="single-form">
                                        <input type="text" class="form-control" name="name" required
                                            placeholder="Nome">
                                    </div>
                                    <div class="single-form">
                                        <input type="text" class="form-control" name="email" required
                                            placeholder="Email ">
                                    </div>
                                    @if (request()->has('empresa'))
                                    <input type="hidden" name="empresa" value="{{ request('empresa') }}">
                                    <input type="hidden" name="role_id" value="1">
                                    @else
                                    <input type="hidden" name="role_id" value="3">
                                    @endif

                                    <div class="single-form">
                                        <input type="password" class="form-control" name="password" required
                                            placeholder="Password ">
                                    </div>
                                    <div class="single-form">
                                        <input type="password" class="form-control" name="password_confirmation" required
                                            placeholder="Confirm Password ">
                                    </div>
                                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                        <div class="mt-4">
                                            <x-label for="terms">
                                                <div class="row flex items-center">
                                                    <x-checkbox name="terms" class="col-md-1 col-sm-1" style="box-shadow: unset !important;" id="terms" required />
                                                    <div class="ml-2 col-md-7 col-sm-7">
                                                        {!! __('Eu aceito :privacy_policy', [

                                                            'privacy_policy' =>
                                                                '<a target="_blank" href="' .
                                                                route('politica') .
                                                                '" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">' .
                                                                __('a Politica e Privacidade') .
                                                                '</a>',
                                                        ]) !!}
                                                    </div>
                                                </div>
                                            </x-label>
                                        </div>
                                    @endif
                                    <div class="form-btn">
                                        <button class="btn">Registar</button>
                                    </div>

                                </form>
                                <div class="flex items-center justify-end mt-4">
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('entrar') }}">
                                        Já estás registado? Entrar😀
                                    </a>
                                </div>
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
