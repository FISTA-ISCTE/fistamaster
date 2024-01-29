<div>
    <div style="border-radius:5px; padding:1rem;margin-top:2rem;margin-right:3rem;" class="shadow">
        @if (session()->has('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1rem;">
            Adiciona os Oradores: </h2>
        <form wire:submit.prevent="submit">
            <input type="text" style="margin-top:1rem;" wire:model="nome" placeholder="Nome">
            <input type="file" style="margin-top:1rem;" wire:model="imagem">
            <textarea wire:model="bio" style="margin-top:1rem;" style="margin-top:1rem;" placeholder="Descrição"></textarea>
            <input type="url" style="margin-top:1rem;" wire:model="url" placeholder="URL do LinkedIn">
            <input type="text" style="margin-top:1rem;" wire:model="cargo" placeholder="Cargo">

            <button type="submit" style="color:white;width:50%;border-radius:5px; font-weight: bold; font-size:1.2rem; padding:1rem; margin-top:2%;background: linear-gradient(195deg, #00c4cc 0%, #008d84 100%);">Adicionar Orador</button>
        </form>
    </div>
</div>
