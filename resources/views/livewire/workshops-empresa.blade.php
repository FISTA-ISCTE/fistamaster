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

<div style="display: flex; justify-content: center; align-items: center;" >
    <form wire:submit.prevent="submit"
        style="width: 50%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px; border-radius: 8px; display: flex; flex-direction: column; gap: 20px;margin:1.5rem">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1rem;">
            Titulo</h2>
        <input type="text" wire:model="title" placeholder="Título"
            style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1rem;">
            Descrição </h2>
        <textarea wire:model="description" placeholder="Descrição"
            style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1rem;">
            Requisitos </h2>
        <textarea wire:model="requirements" placeholder="Requisitos"
            style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1rem;">
            Imagem (Tamanho 416x247 pixeis e min 2GB ) </h2>
        <input type="file" wire:model="photo" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        @if ($image)
            <a href="{{ $image }}">Ver imagem</a>
        @endif
        @if (!$data)
            <select wire:model="schedule" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                <option value="">Selecione um Horário</option>
                @foreach ($availableSchedules as $key => $value)
                    <option value="{{ $key }}">{{ $value }}</option>
                @endforeach
            </select>
            <input type="number" wire:model="duration" placeholder="Duração (em minutos)"
                style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        @else
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1rem;">
           O teu Horário é: </h2>
            <p>{{ $data }}</p>

        @endif
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1rem;">
            Numero total de alunos: </h2>
        <input type="number" wire:model="atendees" placeholder="Numero total de alunos:"
            style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        <button type="submit"
        style="color:white;width:50%;border-radius:5px; font-weight: bold; font-size:1.2rem; padding:1rem; margin-top:2%;background: linear-gradient(195deg, #00c4cc 0%, #008d84 100%);">Enviar</button>
    </form>
</div>
