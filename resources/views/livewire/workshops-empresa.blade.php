<div>
    <form wire:submit.prevent="submit">
        <input type="text" wire:model="title" placeholder="Título">
        <textarea wire:model="description" placeholder="Descrição"></textarea>
        <textarea wire:model="requirements" placeholder="Requisitos"></textarea>
        <input type="file" wire:model="photo">
        <select wire:model="schedule">
            <option value="">Selecione um Horário</option>
            @foreach($availableSchedules as $key => $value)
                <option value="{{ $key }}">{{ $value }}</option>
            @endforeach
        </select>
        <input type="number" wire:model="duration" placeholder="Duração (em minutos)">
        <button type="submit">Enviar</button>
    </form>
</div>
