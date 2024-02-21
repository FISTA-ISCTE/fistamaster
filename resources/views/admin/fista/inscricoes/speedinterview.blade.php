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
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Tipo</th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Nome aluno</th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">email</th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Ano</th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Curso</th>
                                            <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Download(CV)</th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-700">
                                        @foreach ($empresas as $empresa)
                                        <tr>
                                            <td class="text-left py-3 px-4">{{$empresa->si->empresas}} {{$empresa->si->begin}}</td>
                                            <td class="text-left py-3 px-4">{{$empresa->user->name}}</td>
                                            <td class="text-left py-3 px-4">{{$empresa->user->email}}</td>
                                            <td class="text-left py-3 px-4">{{$empresa->user->ano->designacao}}</td>
                                            <td class="text-left py-3 px-4">{{$empresa->user->curso->designacao}}</td>
                                            <td class="text-left py-3 px-4">
                                                <a href="https://fista.iscte-iul.pt/storage/{{$empresa->user->file}}" download="CV-{{$empresa->user->name}}">Download</a>
                                            </td>
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
