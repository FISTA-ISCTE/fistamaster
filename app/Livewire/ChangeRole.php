<?php

namespace App\Livewire;

use App\Models\Empresa;
use Livewire\Component;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Auth;

class ChangeRole extends Component
{
   public $selectedEmpresa = '';
    public $empresas;

    public function mount()
    {
        $this->empresas = Empresa::all();
        $this->selectedEmpresa = Auth::user()->id_empresa;
    }

    public function changeRole()
    {
        $user = Auth::user();
        // Atualiza o id da empresa do usuário
        $user->id_empresa = $this->selectedEmpresa;
        // Atualiza a role do usuário para 'empresa' (ou qualquer lógica específica que você use para gerenciar roles)
        $user->syncRoles('empresa'); // Assumindo que você está usando o Spatie Permission
        $user->save();

        session()->flash('message', 'Empresa atualizada com sucesso!');
        redirect('/empresa/dashboard');
    }

    public function render()
    {
        return view('livewire.change-role');
    }
}
