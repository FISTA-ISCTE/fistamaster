<?php

namespace App\Livewire;

use App\Models\Seat;
use Livewire\Component;

use Illuminate\Support\Facades\Auth;

class SeatsMap29 extends Component
{
    public $seats;
    public $selectedSeatId;
    public $confirmingSeatId = null;
    public $autoName = 'Nome Automático'; // Este será o nome atribuído automaticamente
    public $showConfirmation = false;

    public function mount()
    {
        if (Auth::user()->hasRole("empresa")) {
            if (strcmp(Auth::user()->empresa->plano, "diamond") != 0) {
                if (Seat::where('name', Auth::user()->empresa->id)->where("dia", 29)->count() > 0) {
                    $this->seats = Seat::where('occupied', 1)->where("dia", 29)->where("category", Auth::user()->empresa->plano)->get();
                } else {
                    $this->seats = Seat::where("dia", 29)->where("category", Auth::user()->empresa->plano)->get();
                }
            } else {
                if (Seat::where('name', Auth::user()->empresa->id)->where("dia", 29)->count() > 0) {
                    $this->seats = Seat::where('occupied', 1)->where("dia", 29)->where("category", "premium")->get();
                } else {
                    $this->seats = Seat::where("dia", 29)->where("category", "premium")->get();
                }
            }
        } elseif (Auth::user()->hasRole("admin")) {
            $this->seats = Seat::where("dia", 29)->get();
        }

    }

    public function confirmSeat($seatId)
    {
        $this->selectedSeatId = $seatId;
        $this->showConfirmation = true;
    }
    public function selectSeat($seatId)
    {
        // Seu código para lidar com a seleção de um assento
        $this->confirmingSeatId = $seatId;
        $this->showConfirmation = true;
    }
    public function registerSeat()
    {
        $seat = Seat::find($this->confirmingSeatId);
        $empresaId = Auth::user()->empresa->id;
        $empresa_count = Seat::where('name', $empresaId)->where("dia", 29)->count();

        // Verifique se a empresa já tem um assento registrado
        if ($empresa_count >= 1) {
            // Configurar uma propriedade de mensagem de erro para mostrar ao usuário
            session()->flash('error', 'A empresa já possui um stand reservado e não pode selecionar outro.');
            $this->resetConfirmation();
            return;
        }

        if ($seat && !$seat->occupied) {
            $seat->name = $empresaId;
            $seat->occupied = true;
            $seat->avatar = Auth::user()->empresa->avatar;
            $seat->save();
            $this->resetConfirmation();

            // Atualize a lista de assentos para refletir a mudança
            if (strcmp(Auth::user()->empresa->plano, "diamond") != 0) {
                if (Seat::where('name', Auth::user()->empresa->id)->where("dia", 29)->count() > 0) {
                    $this->seats = Seat::where('occupied', 1)->where("dia", 29)->where("category", Auth::user()->empresa->plano)->get();
                } else {
                    $this->seats = Seat::where("dia", 29)->where("category", Auth::user()->empresa->plano)->get();
                }
            } else {
                if (Seat::where('name', Auth::user()->empresa->id)->where("dia", 29)->count() > 0) {
                    $this->seats = Seat::where('occupied', 1)->where("dia", 29)->where("category", "premium")->get();
                } else {
                    $this->seats = Seat::where("dia", 29)->where("category", "premium")->get();
                }
            }

        }
    }

    public function resetConfirmation()
    {
        $this->showConfirmation = false;
        $this->selectedSeatId = null;
        $this->confirmingSeatId = null;
    }
    public function render()
    {
        return view('livewire.seats-map29');
    }
}
