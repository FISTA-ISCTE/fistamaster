<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('Logotipos') }}
        </h1>
    </x-slot>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <style>
        .responsive-table {
            overflow-x: auto;
            display: block;
        }
    </style>

    <div class="py-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                <table class="table table-bordered">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nome da Equipa</th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nome aluno 1
                                            </th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email aluno 1</th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nome aluno 2
                                            </th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email aluno 2</th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nome aluno 3
                                            </th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email aluno 3</th>
                                            
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-700">
                                        @foreach ($matematicaInscritos as $matematicaInscrito)
                                            <tr>
                                                <td class="text-left py-3 px-4">{{ $matematicaInscrito->nome_grupo }}</td>
                                                @for($i=1;$i < 4; $i++)
                                                    <td class="text-left py-3 px-4">{{ $matematicaInscrito->{'nome' . $i} }}</td>
                                                    <td class="text-left py-3 px-4">{{ $matematicaInscrito->{'email' . $i} }}</td>
                                                @endfor
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</x-app-layout>
