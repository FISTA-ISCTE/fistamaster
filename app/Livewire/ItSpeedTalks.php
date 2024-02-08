<?php

namespace App\Livewire;

use App\Models\Empresa;
use App\Models\Orador;
use App\Models\SlotsIt;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\ItSpeed;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class ItSpeedTalks extends Component
{
    use WithFileUploads;

    public $titulo_it;
    public $descricao;
    public $ppt;
    public $ppt_url;
    public $selectedSlot;
    public $slots;
    public $slotsDisponiveis = [];
    public $image;
    public $itSpeedId;
    public $idEmpresa;
    public $oradores;

    public function mount()
    {

        $this->idEmpresa = Auth::user()->id_empresa;

        // Busca uma instância de ItSpeed associada à empresa
        // Isso pressupõe que existe uma relação 'um para um' entre Empresa e ItSpeed
        $itSpeed = ItSpeed::where('id_empresa', $this->idEmpresa)->first();

        // Se existe um registro ItSpeed associado à empresa, use seu ID
        if ($itSpeed) {
            $this->itSpeedId = $itSpeed->id;
            $this->oradores = Orador::where('it_speed_id', $this->itSpeedId)->get();
        }
        $empresa = Empresa::where("id", Auth::user()->id_empresa)->first();
        $this->slots = SlotsIt::all();
        // Carrega as slots disponíveis
        $this->slotsDisponiveis = SlotsIt::whereNull('id_empresa')->get();

        // Busca informações do ItSpeed, se existir
        $it = null;
        if ($empresa) {
            $it = ItSpeed::where("id_empresa", $empresa->id)->first();
        }

        if ($it) {
            $this->titulo_it = $it->titulo;
            $this->descricao = $it->descricao;
            if ($it->ppt) {
                $this->ppt_url = "https://fista.iscte-iul.pt/storage/" . $it->ppt;
            }
        }
        $slot_empresa = SlotsIt::where("id_empresa", $empresa->id)->first();

        if (isset($slot_empresa)) {
            $this->selectedSlot = $slot_empresa->id;
        }
    }

    public function submit()
    {
        $this->validate([
            'ppt' => 'max:2024', // Validação do arquivo
        ]);

        $empresa = Empresa::where("id", Auth::user()->id_empresa)->first();
        if (!$empresa) {
            session()->flash('error', 'Empresa não encontrada.');
            return;
        }

        $it = ItSpeed::where("id_empresa", $empresa->id)->firstOrNew();
        $it->titulo = $this->titulo_it;
        $it->descricao = $this->descricao;
        $it->id_empresa = $empresa->id;

        if ($this->ppt) {
            $it->ppt = $this->ppt->store('ppts', 'public');
        }

        $selectedSlot = SlotsIt::find($this->selectedSlot);
        if ($selectedSlot) {
            $it->dia = $selectedSlot->dia;
            $it->hora_inicio = $selectedSlot->hora_inicio;
            $it->hora_fim = $selectedSlot->hora_fim;
        }

        $it->save();

        // Associa a slot selecionada à empresa
        if ($this->selectedSlot) {
            $slot = SlotsIt::find($this->selectedSlot);
            if ($slot) {
                $slot->id_empresa = $empresa->id;
                $slot->save();
            }
        }

        session()->flash('success', 'It Speed Talk registada com sucesso! Faz refresh a esta página e regista os oradores!');
        $this->reset(); // Resetar o formulário
    }

    public function render()
    {
        return view('livewire.it-speed-talks');
    }
}
