<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Workshop;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class WorkshopInscricao extends Component
{
    public $workshopId;
    public $estaInscrito;
    public $workshop;

    public function mount($workshopId)
    {
        $this->workshopId = $workshopId;
        $this->workshop = Workshop::find($workshopId);
        $this->verificarInscricao();
    }
    public function verificarInscricao()
    {
        $this->estaInscrito = DB::table('workshop_inscricao')
            ->where('user_id', Auth::id())
            ->where('workshop_id', $this->workshopId)
            ->exists();
    }

    public function inscrever()
    {
        $workshop = Workshop::find($this->workshopId);

        if (!$workshop) {
            session()->flash('error', 'Workshop não encontrado.');
            return;
        }

        if ($this->estaInscrito) {
            // Desinscrever o usuário
            DB::table('workshop_inscricao')
                ->where('user_id', Auth::id())
                ->where('workshop_id', $this->workshopId)
                ->delete();

            $workshop->increment('spotsavailable'); // Incrementa as vagas disponíveis
            session()->flash('success', 'Desinscrição realizada com sucesso!');
        } else {
            if ($workshop->spotsavailable > 0) {
                // Inscrever o usuário
                DB::table('workshop_inscricao')->insert([
                    'user_id' => Auth::id(),
                    'workshop_id' => $this->workshopId,
                    'created_at' => now(),
                    'updated_at' => now()
                ]);

                $workshop->decrement('spotsavailable'); // Decrementa as vagas disponíveis
                session()->flash('success', 'Inscrição realizada com sucesso!');
            } else {
                session()->flash('error', 'Infelizmente, não há vagas disponíveis.');
                return;
            }
        }

        $this->verificarInscricao();
    }



    public function render()
    {
        return view('livewire.workshop-inscricao');
    }
}
