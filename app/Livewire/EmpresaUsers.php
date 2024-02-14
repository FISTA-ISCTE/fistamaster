<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Spatie\Permission\Models\Role;

class EmpresaUsers extends Component
{
    public $empresaId;
    public $userEmail;

    public function mount($empresaId)
    {
        $this->empresaId = $empresaId;
    }

    public function addUserToEmpresaByEmail()
    {
        $user = User::where('email', $this->userEmail)->first();
        if ($user) {
            $user->id_empresa = $this->empresaId;
            $user->save();

            // Atribui a role de 'empresa' ao usuário
            $user->syncRoles('empresa');

            // Resetar o email após a adição
            $this->userEmail = '';

            // Adicionar mensagem de sucesso
            session()->flash('message', 'Utilizador adicionado à empresa com sucesso.');
        } else {
            // Adicionar mensagem de erro se o usuário não for encontrado
            session()->flash('error', 'Utilizador não encontrado.');
        }
    }

    public function render()
    {
        $users = User::where('id_empresa', $this->empresaId)->get();
        return view('livewire.empresa-users', compact('users'));
    }
}
