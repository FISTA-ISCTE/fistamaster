<div style="display: flex; justify-content: center; align-items: center; margin-top: 1.5rem; margin-bottom: 1.5rem;">
    @if (auth()->check())  <!-- Verifica se o usuário está logado -->
        @if ($workshop->spotsavailable > 0)
            <button wire:click="inscrever" class="btn btn-primary">
                {{ $estaInscrito ? 'Desinscrever' : 'Inscrever-se no Workshop' }}
            </button>
        @else
            <button class="btn btn-secondary" disabled>Esgotado</button>
        @endif
    @else
    <a href="/login?redirect=/workshops" class="btn btn-primary">Faça o login para se inscrever</a>

    @endif

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
</div>
