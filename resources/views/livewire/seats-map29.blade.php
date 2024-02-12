<div>
    <div class="seats-map-container" style="position: relative; width: 100%;">
        <img src="/img/fotos/dia_29.jpg" alt="Mapa de Assentos" style="width: 100%; height: auto;" class="mapa-imagem">
        @foreach ($seats as $seat)
            <button wire:click="selectSeat({{ $seat->id }})" class="seat {{ $seat->occupied ? 'occupied' : '' }}"
                style="position: absolute; top: {{ $seat->top }}%; left: {{ $seat->left }}%;">
                @if ($seat->occupied)
                    <img src="https://fista.iscte-iul.pt/storage/{{ $seat->avatar }}" alt="Ocupado">
                @else
                    <img src="/img/fotos/check-mark.png" style="width: 2rem;" alt="Livre">
                @endif
            </button>
        @endforeach
    </div>
    <style>
        .seat {
            transform: translate(-50%, -50%);
            border: none;
            /* Remover borda se desejado */
            background: transparent;
            /* Remover fundo para mostrar apenas a imagem */
            cursor: pointer;
            /* Mãozinha ao passar o mouse sobre o botão */
        }

        .seat img {
            width: 4rem;
            /* Ajuste conforme necessário para o tamanho do botão */
            height: auto;
        }
    </style>
    @if ($showConfirmation)
        <div class="modal" style="display:block;">
            <div class="modal-content">
                <h1 style="font-size:1.8rem;font-weight:bold">Confirma a reserva do stand?</h1>
                <button class="btn btn-confirm " wire:click="registerSeat">Confirmar</button>
                <br><br>
                <button class="btn btn-cancel " wire:click="$set('showConfirmation', false)">Cancelar</button>
            </div>
        </div>
    @endif


    <style>
        .modal-overlay {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.6);
            display: flex;
            align-items: center;
            justify-content: center;
            z-index: 1000;
        }

        .modal {
            background: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 30rem;
            max-width: 30rem;
            z-index: 1001;
        }

        .modal-header h3 {
            margin-top: 0;
        }

        .modal-body {
            padding: 10px 0;
        }

        .modal-footer {
            text-align: right;
        }

        .btn {
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            margin: 0 5px;
        }

        .btn-confirm {
            background-color: #007bff;
            color: white;
        }

        .btn-confirm:hover {
            background-color: #0056b3;
        }

        .btn-cancel {
            background-color: #dc3545;
            color: white;
        }

        .btn-cancel:hover {
            background-color: #c82333;
        }
    </style>


</div>
