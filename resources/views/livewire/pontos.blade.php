<div style="max-width: 500px; margin: auto; padding: 20px;">
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

    <div style="justify-content: space-between; align-items: center;">
        <input type="text" wire:model="token" class="form-control" placeholder="Insira o token aqui" style="width: 90%; margin-right: 10px;">
        <button wire:click="save" class="btn btn-primary" style="margin-top: 1.2rem;">Guardar</button>
    </div>
</div>
