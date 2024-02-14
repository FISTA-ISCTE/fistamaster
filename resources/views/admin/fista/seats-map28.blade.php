<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('Dia 28: Escolher stand') }}
        </h1>
        <span>Clicar em cima do icon verde para reservar o stand!</span>
    </x-slot>
    <style>
        .emp-profile {
            padding: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
    </style>
    @livewire('seats-map')
</x-app-layout>
