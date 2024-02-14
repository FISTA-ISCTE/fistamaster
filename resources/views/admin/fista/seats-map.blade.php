<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('Escolher Stand:') }}
        </h1>
        <a href="/admin/seats28" class="btn btn-confirm ">Dia 28</a>
        <a href="/admin/seats29" class="btn btn-confirm ">Dia 29</a>
    </x-slot>
    <style>
        .emp-profile {
            padding: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
    </style>

</x-app-layout>
