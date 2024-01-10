<x-app-layout>

    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('👋 Olá, ') }}<span style="font-size:1.8rem;">{{ Auth::user()->name }}</span>
        </h1>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div style="margin-top:3rem;margin-bottom:3rem;; position: relative;">
                    <div class="container mt-5">
                        <div class="row">
                            @livewire('email-sender')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
