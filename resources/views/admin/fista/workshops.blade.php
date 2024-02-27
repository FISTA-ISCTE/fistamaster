<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('👋 Olá, ') }}<span style="font-size:1.8rem;">{{ Auth::user()->name }}</span>
        </h1>
    </x-slot>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <div class="container">
        <h2>Workshops</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Nome do Workshop</th>
                    <th>QR Code</th>

                </tr>
            </thead>
            <tbody>
                @foreach ($workshops as $workshop)
                    <tr>
                        <td>{{ $workshop->title }}</td>
                        <td>
                            {!! QrCode::size(200)->generate(
                                'https://fista.iscte-iul.pt/D1mC7SLPoT6QYF7ruLhftKYpYCMOgS/workshop/' . $workshop->id,
                            ) !!}
                        </td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>
