<div class="container" style="max-width: 800px; margin: auto; padding: 20px;">
    <p style="font-size:1.2rem;margin-bottom:2rem;">Envia o meu Código aos teus amigos e ganha 50 pontos: <span style="font-weight:bold;"><b>{{ Auth::user()->token_pessoal }}</b></span></p>
    <!-- Linha Principal -->
    <div class="row">

        <!-- Coluna para o Input e Botão -->
        <div class="col-md-6">
            @if (session()->has('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            @if (session()->has('error'))
                <div class="alert alert-danger">
                    {{ session('error') }}
                </div>
            @endif

            <div class="input-group mb-3">
                <input type="text" wire:model="token" class="form-control" placeholder="Insira o token aqui">
                <div class="input-group-append">
                    <button wire:click="save" class="btn btn-primary"
                        style="margin-top: 1.2rem;border-radius:10px;">Guardar</button>
                </div>
            </div>
        </div>

        <!-- Coluna para o Histórico -->
        <div class="col-md-6">
            <h3><b>Histórico de Pontos</b></h3>
            <ul>
                @foreach ($historicoPontos as $ponto)
                    <li>+ {{ $ponto['pontos'] }} pontos - {{ $ponto['tipo'] }}</li>
                @endforeach
            </ul>
        </div>

    </div>

</div>
