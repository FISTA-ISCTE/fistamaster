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
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="bg-dark text-white">
                                        <tr>
                                            <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">ID
                                            </th>
                                            <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                Telemovel</th>
                                            <th class="w-2/12 text-left py-3 px-4 uppercase font-semibold text-sm">Nome
                                            </th>
                                            <th class="w-2/12 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                Almocos Extras
                                            </th>
                                            <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">Plano
                                            </th>
                                            <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">Valor
                                            </th>
                                            <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">Dia
                                            </th>
                                            <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">Dia
                                            </th>
                                            <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">CV
                                            </th>
                                            <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                Workshop</th>
                                            <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                Pequeno-Almoço</th>
                                            <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">IT
                                                Speed</th>
                                            <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                Backoffice</th>
                                            <th class="w-1/12 text-left py-3 px-4 uppercase font-semibold text-sm">
                                                Ativo/Desativo</th>
                                            <th class="w-2/12 text-left py-3 px-4 uppercase font-semibold text-sm">Ver
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody class="text-gray-700">
                                        <!-- Aqui ficariam as linhas da tabela, por exemplo: -->
                                        @foreach ($empresas as $empresa)
                                            <tr>
                                                <td class="w-1/12 text-left py-3 px-4">{{ $empresa->id }}</td>
                                                <td class="w-1/12 text-left py-3 px-4">{{ $empresa->telemovel }}</td>
                                                <td class="w-2/12 text-left py-3 px-4">{{ $empresa->nome_empresa }}</td>
                                                <td class="w-1/12 text-left py-3 px-4">{{ $empresa->almocos_extra }}</td>
                                                <td class="w-1/12 text-left py-3 px-4">{{ $empresa->plano }}</td>
                                                <td class="w-1/12 text-left py-3 px-4">{{ $empresa->total }}</td>
                                                <td class="w-1/12 text-left py-3 px-4">{{ $empresa->dia1 }}</td>
                                                <td class="w-1/12 text-left py-3 px-4">{{ $empresa->dia2 }}</td>
                                                <td class="w-2/12 text-left py-3 px-4">{{ $empresa->cvs }}</td>
                                                <td class="w-1/12 text-left py-3 px-4">{{ $empresa->worshop }}</td>
                                                <td class="w-1/12 text-left py-3 px-4">{{ $empresa->cocktail }}</td>
                                                <td class="w-1/12 text-left py-3 px-4">{{ $empresa->itspeedtalks }}</td>
                                                <td class="w-1/12 text-left py-3 px-4">{{ $empresa->backoffice }}</td>

                                                <td class="w-1/12 text-left py-3 px-4"> <?php if ($empresa->mostrar == 0) {
                                                    echo 'Desativo';
                                                } else {
                                                    echo 'Ativo';
                                                } ?> </td>
                                                <td class="w-2/12 text-left py-3 px-4">
                                                    <a href="{{ route('view.empresas', ['id' => $empresa->id]) }}"
                                                        class="text-blue-600 hover:text-blue-900"><i
                                                            style="font-size:1rem;" class="fas fa-info-circle"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach

                                        <!-- Outras linhas aqui... -->
                                    </tbody>

                                </table>
                                <div class="pagination">
                                    {{ $empresas->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

</x-app-layout>
