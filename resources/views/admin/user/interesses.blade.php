<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('👋 Olá, ') }}<span style="font-size:1.8rem;">{{ Auth::user()->name }}</span>
        </h1>
    </x-slot>
    <div>
        <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
            <div class="card shadow" style="border-radius:10px; background-color:white">

                @livewire('interesses')

            </div>
        </div>
    </div>




</x-app-layout>
