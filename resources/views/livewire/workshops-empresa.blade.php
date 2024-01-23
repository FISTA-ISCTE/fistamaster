<div style="display: flex; justify-content: center; align-items: center;">
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
    <form wire:submit.prevent="submit"
        style="width: 50%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px; border-radius: 8px; display: flex; flex-direction: column; gap: 20px;">
        <input type="text" wire:model="title" placeholder="Título"
            style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
        <textarea wire:model="description" placeholder="Descrição"
            style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
        <textarea wire:model="requirements" placeholder="Requisitos"
            style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>
        <input type="file" wire:model="photo" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
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
            <p>O teu Horario:</p>
            <p>{{ $data }}</p>

        @endif
        <input type="number" wire:model="atendees" placeholder="Numero total de alunos:"
            style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">


        <button type="submit"
            style="padding: 10px; border-radius: 5px; border: none; background-color: #007bff; color: white; cursor: pointer;">Enviar</button>
    </form>
</div>
