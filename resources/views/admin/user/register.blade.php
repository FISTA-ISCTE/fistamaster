
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
                                            <input type="text" class="form-control" name="name" required placeholder="Nome">
                                        </div>
                                        <div class="single-form">
                                            <input type="text" class="form-control" name="email" required placeholder="Email ">
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
                                            <input type="password" class="form-control" name="password" required placeholder="Password ">
                                        </div>
                                        <div class="single-form">
                                            <input type="password" class="form-control" name="password_confirmation" required placeholder="Confirm Password ">
                                        </div>
                                        @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                                            <div class="mt-4">
                                                <x-label for="terms">
                                                    <div class="flex items-center">
                                                        <x-checkbox name="terms" id="terms" required />
                                                        <div class="ml-2">
                                                            {!! __('Eu aceito :terms_of_service and :privacy_policy', [
                                                                    'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                                                    'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
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
                                        <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
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
