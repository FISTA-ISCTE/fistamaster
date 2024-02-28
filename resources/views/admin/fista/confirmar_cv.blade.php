<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('👋 Olá, ') }}<span style="font-size:1.8rem;">{{ Auth::user()->name }}</span>
        </h1>
    </x-slot>
    <div class="container">
        <div class="row justify-content-start">
            <div class="col-lg-7 col-md-12 ">

                <h1 style="font-size:55px;color: #1ec4bd;font-weight: bold;padding-top:8.5rem;">Verificação de CV
                </h1>
            </div>

            @livewire('c-vverify')



        </div>

        <style>
            .btn-notvalid::before,
            .btn-notvalid::after {

                background: #E4350F;

            }

            .btn-valid::before,
            .btn-valid::after {
                background: #4CBB17;

            }
        </style>
    </div>

</x-app-layout>
