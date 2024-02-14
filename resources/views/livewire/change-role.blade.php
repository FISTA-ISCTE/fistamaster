<div>
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="changeRole">
        <div class="form-group">
            <label for="empresa">Selecione uma Empresa</label>
            <select wire:model="selectedEmpresa" id="empresa" class="form-control">
                <option value="">Selecione</option>
                @foreach($empresas as $empresa)
                    <option value="{{ $empresa->id }}">{{ $empresa->nome_empresa }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Empresa</button>
    </form>
</div>
