<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('Faturação') }}
        </h1>
    </x-slot>
    <style>
        .emp-profile{
            padding: 3%;
            border-radius: 0.5rem;
            background: #fff;
        }
    </style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <div class="container emp-profile">
                    <livewire:faturacao-nif :faturacao="$faturacao">
                </div>

<script>
    const showInputRadio = document.querySelector('input[name="opcaoNumeroOrdemCompra"][value="1"]');
    const hideInputRadio = document.querySelector('input[name="opcaoNumeroOrdemCompra"][value="0"]');
    const numeroOrdemCompra = document.getElementById('numeroOrdemCompra');

    if(showInputRadio.checked)
        numeroOrdemCompra.style.display = 'block';

    // Add a change event listener to the radio buttons
    showInputRadio.addEventListener('change', function () {
        if (this.checked) {
            numeroOrdemCompra.style.display = 'block';
        }
    });

    hideInputRadio.addEventListener('change', function () {
        if (this.checked) {
            numeroOrdemCompra.style.display = 'none';
        }
    });

</script>

            </div>
        </div>
    </div>
</x-app-layout>