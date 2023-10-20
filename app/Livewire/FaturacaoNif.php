<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class FaturacaoNif extends Component{
    public $nif;
    public $nome_fiscal;
    public $morada;
    public $opcaoNumeroOrdemCompra;
    public $numeroOrdemCompra;
    public $faturacao2023;

    public function render() {
        return view('livewire.faturacao-nif');
    }

    public function mount($faturacao) {
        if(isset($faturacao->nif))$this->nif = $faturacao->nif;
        if(isset($faturacao->nome_fiscal))$this->nome_fiscal = $faturacao->nome_fiscal;
        if(isset($faturacao->morada))$this->morada = $faturacao->morada;
        if(isset($faturacao->s_n_numeroOrdemCompra))$this->opcaoNumeroOrdemCompra = $faturacao->s_n_numeroOrdemCompra;
        if(isset($faturacao->numeroOrdemCompra))$this->numeroOrdemCompra = $faturacao->numeroOrdemCompra;
        if(isset($faturacao->faturacao2023))$this->faturacao2023 = $faturacao->faturacao2023;
    }

    public function consultarNif() {
        $url = "https://www.nif.pt/?json=1&q={$this->nif}&key=df60728ae393cbdb1bbcf7b03cd1190d";
        $response = Http::get($url);

        if ($response->successful()) {
            $data1 = $response->json();
            if($data1['result'] === 'success'){
                $this->nome_fiscal = $data1['records'][$this->nif]['title'];
                $this->morada = $data1['records'][$this->nif]['address'];
            }
        }
    }
}
