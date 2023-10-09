<x-app-layout>
    <x-slot name="header">
        <h1 class="font-semibold text-xl text-gray-800 leading-tight" style="margin-left:1rem;font-size:1.5rem;">
            {{ __('👋 Olá, ') }}<span style="font-size:1.8rem;">{{ Auth::user()->name }}</span>
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
                        <h2 class="text-center mb-5">BREVEMENTE MAIS ADD-ONS</h2>

                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="bg-dark text-white">
                            <tr>
                                <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">ID</th>
                                <th class="w-2/12 text-left py-3 px-4 uppercase font-semibold text-sm">Nome</th>
                                <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">Plano</th>
                                <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">Valor</th>
                                <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">Dia</th>
                                <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">Dia</th>
                                <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">Ativo/Desativo</th>
                                <th class="w-2/12 text-left py-3 px-4 uppercase font-semibold text-sm">Ações</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-700">
                            <!-- Aqui ficariam as linhas da tabela, por exemplo: -->
                            @foreach ($empresas as $empresa)
                            <tr>
                                <td class="w-1/12 text-left py-3 px-4">{{$empresa->id}}</td>
                                <td class="w-2/12 text-left py-3 px-4">{{$empresa->nome_empresa}}</td>
                                <td class="w-1/12 text-left py-3 px-4">{{$empresa->plano}}</td>
                                <td class="w-1/12 text-left py-3 px-4">{{$empresa->total}}</td>
                                <td class="w-1/12 text-left py-3 px-4">{{$empresa->dia1}}</td>
                                <td class="w-1/12 text-left py-3 px-4">{{$empresa->dia2}}</td>
                                <td class="w-1/12 text-left py-3 px-4">  <?php if($empresa->mostrar==0){ echo "Desativo"; } else{ echo "Ativo";} ?>  </td>
                                <td class="w-2/12 text-left py-3 px-4">
                                    <a href="#" class="text-blue-600 hover:text-blue-900 mr-2">Ver</a>
                                    <a href="#" class="text-yellow-600 hover:text-yellow-900 mr-2">Editar</a>
                                    <a href="#" class="text-red-600 hover:text-red-900">Eliminar</a>
                                </td>
                            </tr>
                            @endforeach
                            <!-- Outras linhas aqui... -->
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
