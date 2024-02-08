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


<div class="row">
    <div class="col-md-6">
        <div style="display: flex; justify-content: center; align-items: center;">

            <form wire:submit.prevent="submit"
                style="width: 50%; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); padding: 20px; border-radius: 8px; display: flex; flex-direction: column; gap: 20px;margin:1.5rem">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1rem;">
                    Titulo da It Speed Talk</h2>
                <textarea wire:model="titulo_it" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>

                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1rem;">
                    Descrição </h2>
                <textarea wire:model="descricao" style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;"></textarea>

                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1rem;">
                    Apresentação da It Speed Talk </h2>
                @if ($ppt_url)
                    <a href="{{ $ppt_url }}">Ver Apresentação</a>
                @else
                    <input type="file" wire:model="ppt"
                        style="padding: 10px; border-radius: 5px; border: 1px solid #ccc;">
                @endif

                @if ($selectedSlot)
                    @php
                        $slotSelecionada = $slots->firstWhere('id', $selectedSlot);
                    @endphp

                    @if ($slotSelecionada)
                        <div>
                            <h3>Detalhes da Slot Selecionada:</h3>
                            <p>Data: {{ $slotSelecionada->dia }}</p>
                            <p>Horário: {{ $slotSelecionada->hora_inicio }} - {{ $slotSelecionada->hora_fim }}</p>
                        </div>
                    @endif
                @else
                    <select wire:model="selectedSlot">
                        @foreach ($slotsDisponiveis as $slot)
                            <option value="{{ $slot->id }}">
                                {{ $slot->dia }} - {{ $slot->hora_inicio }} até {{ $slot->hora_fim }}
                            </option>
                        @endforeach
                    </select>

                @endif

                <button type="submit"
                    style="color:white;width:50%;border-radius:5px; font-weight: bold; font-size:1.2rem; padding:1rem; margin-top:2%;background: linear-gradient(195deg, #00c4cc 0%, #008d84 100%);">Guardar</button>
            </form>

        </div>
    </div>
    <div class="col-md-6">


        @if (isset($itSpeedId))
            @livewire('add-orador', ['itSpeedId' => $itSpeedId, 'idEmpresa' => $idEmpresa])
        @endif
        <div class="row" style="margin-top:2rem;">
            <div style=" justify-content: center; align-items: center;">
                @if (isset($oradores) && count($oradores) > 0)
                    <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1rem;">
                        Oradores: </h2>
                        <br>
                    @foreach ($oradores as $orador)
                        <div class="orador" style="display: flex; align-items: center; gap: 10px; margin-bottom: 10px;">
                            <img src="{{ asset('storage/' . $orador->imagem) }}" alt="Imagem do orador"
                                style="width: 2rem; height: 2rem; border-radius: 50%;">
                            <div>
                                <strong>{{ $orador->nome }}</strong>
                                <p style="margin: 0;">{{ $orador->cargo }}</p>
                            </div>
                        </div>
                    @endforeach
                @else
                    <p>Nenhum orador registado.</p>
                @endif
            </div>

        </div>

    </div>

</div>
