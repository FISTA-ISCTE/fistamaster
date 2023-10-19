<form id="companyProfile" method="post" action="{{ route('empresa.faturacao.guardar') }}">
    @csrf
    <div class="row">
        <div class="col-10">
            <div class="single-form">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1.2rem;">Número de Identificação de Pessoa Coletiva</h2>
                <input type="text" name="nif" id="nif"  autocomplete="nif" autofocus placeholder="Número de Identificação de Pessoa Coletiva" wire:model="nif">          
            </div>
        </div>
        <div class="col-2" style="display: flex;align-items: end;">
            <button type="button" class="btn" style="background: linear-gradient(195deg, #00c4cc 0%, #008d84 100%);padding:0 10px;height:auto;" wire:click="consultarNif">Preencher dados</button>
        </div>
    </div>

    <div class="single-form" style="margin-top:2%">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1.2rem;">Nome de Empresa para Faturação</h2>
        <input type="text" name="nome_fiscal" id="nome_fiscal"  autocomplete="nome_fiscal" autofocus placeholder="Nome de Empresa para Faturação" wire:model="nome_fiscal">          
    </div>

    <div class="single-form" style="margin-top:2%">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1.2rem;">Morada de Faturação</h2>
        <input type="text" name="morada" id="morada"  autocomplete="morada" autofocus placeholder="Morada de Faturação" wire:model="morada">          
    </div>

    <div class="single-form" style="margin-top:2%">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1.2rem;">Pretende número de ordem de compra na fatura?</h2>
        <div class="row" style="margin:0">
            <div class="form-check form-check-inline">
                @if(isset($opcaoNumeroOrdemCompra) && $opcaoNumeroOrdemCompra === 1)
                    <input class="form-check-input" type="radio" name="opcaoNumeroOrdemCompra" id="opcaoNumeroOrdemCompraSim" value="1" checked wire:model="opcaoNumeroOrdemCompra">
                @else
                    <input class="form-check-input" type="radio" name="opcaoNumeroOrdemCompra" id="opcaoNumeroOrdemCompraSim" value="1" wire:model="opcaoNumeroOrdemCompra">
                @endif
                <label class="form-check-label" for="opcaoNumeroOrdemCompraSim">Sim</label>
            </div>
            <div class="form-check form-check-inline">
                @if(isset($opcaoNumeroOrdemCompra) && $opcaoNumeroOrdemCompra === 0)
                    <input class="form-check-input" type="radio" name="opcaoNumeroOrdemCompra" id="opcaoNumeroOrdemCompraNao" value="0" checked wire:model="opcaoNumeroOrdemCompra">
                @else
                    <input class="form-check-input" type="radio" name="opcaoNumeroOrdemCompra" id="opcaoNumeroOrdemCompraNao" value="0" wire:model="opcaoNumeroOrdemCompra">
                @endif
                <label class="form-check-label" for="opcaoNumeroOrdemCompraNao">Não</label>
            </div>
            <input style="width:88.5%; display:none" type="text" name="numeroOrdemCompra" id="numeroOrdemCompra"  autocomplete="numeroOrdemCompra" autofocus placeholder="Número de Ordem de Compra" wire:model="numeroOrdemCompra">
        </div>          
    </div>

    <div class="single-form" style="margin-top:2%">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight" style="font-size:1.2rem;">Pretende faturação ainda em 2023?</h2>
        <div class="row" style="margin:0">
            <div class="form-check form-check-inline">
                @if(isset($faturacao2023) && $faturacao2023 === 1)
                    <input class="form-check-input" type="radio" name="opcaoFaturacao2023" id="opcaoFaturacao2023Sim" value="1" checked wire:model="faturacao2023">
                @else
                    <input class="form-check-input" type="radio" name="opcaoFaturacao2023" id="opcaoFaturacao2023Sim" value="1" wire:model="faturacao2023">
                @endif
                <label class="form-check-label" for="opcaoFaturacao2023Sim">Sim</label>
            </div>
            <div class="form-check form-check-inline">
                @if(isset($faturacao2023) && $faturacao2023 === 0)
                    <input class="form-check-input" type="radio" name="opcaoFaturacao2023" id="opcaoFaturacao2023Nao" value="0" checked wire:model="faturacao2023">
                @else
                    <input class="form-check-input" type="radio" name="opcaoFaturacao2023" id="opcaoFaturacao2023Nao" value="0" wire:model="faturacao2023">
                @endif
                <label class="form-check-label" for="opcaoFaturacao2023Nao">Não</label>
            </div>
            <h2 class="text-sm text-gray-800 leading-tight">(Nota: Por norma a faturação é feita em 2024. Caso, por alguma razão, a sua empresa pretenda que o custo seja imputado em 2023, deve responder “sim”. )</h2>
        </div>          
    </div>

    <button type="submit" id="editBtn" class="btn" style="margin-top:2%;background: linear-gradient(195deg, #00c4cc 0%, #008d84 100%);">Guardar</button>
</form>