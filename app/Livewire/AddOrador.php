<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Orador;
use Livewire\WithFileUploads;

class AddOrador extends Component
{
    use WithFileUploads;

    public $nome;
    public $imagem;
    public $bio;
    public $url;
    public $cargo;
    public $itSpeedId;
    public $idEmpresa;

    public function mount($itSpeedId, $idEmpresa)
    {
        $this->itSpeedId = $itSpeedId;
        $this->idEmpresa = $idEmpresa;
    }

    public function submit()
    {
        $this->validate([
            'nome' => 'required',
            'imagem' => 'image|max:2048',
            'bio' => 'required',
            'url' => 'nullable|url',
            'cargo' => 'required',
        ]);

        Orador::create([
            'nome' => $this->nome,
            'imagem' => $this->imagem->store('oradores', 'public'),
            'bio' => $this->bio,
            'url' => $this->url,
            'cargo' => $this->cargo,
            'it_speed_id' => $this->itSpeedId,
            'idEmpresa' => $this->idEmpresa,
        ]);

        session()->flash('success', 'Orador adicionado com sucesso!');
        $this->reset();
    }
    public function render()
    {
        return view('livewire.add-orador');
    }
}
