<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Workshop;
use Carbon\Carbon;

class WorkshopsEmpresa extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $requirements;
    public $photo;
    public $schedule;
    public $duration;
    public $availableSchedules = []; // Horários disponíveis

    public function mount()
    {
        // Inicialize availableSchedules com horários disponíveis
        $this->availableSchedules = [
            // Exemplos de horários
            '2024-01-15 09:00' => '15 de Janeiro, 09:00 - 11:00',
            '2024-01-15 11:00' => '15 de Janeiro, 11:00 - 13:00',
            // Adicione mais conforme necessário
        ];

        // Remover horários já reservados
        $this->removeBookedSchedules();
    }

    public function removeBookedSchedules()
    {
        $bookedSchedules = Workshop::pluck('begin')->map(function ($date) {
            return $date->format('Y-m-d H:i');
        })->toArray();

        $this->availableSchedules = array_diff_key($this->availableSchedules, array_flip($bookedSchedules));
    }


    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'requirements' => 'required',
            'photo' => 'image|max:1024', // Validação de imagem
            'schedule' => 'required',
            'duration' => 'required',
        ]);

        // Tratamento dos horários
        $begin = Carbon::createFromFormat('Y-m-d H:i', $this->schedule);
        if ($begin) {
            $end = $begin->copy()->addMinutes($this->duration);
        } else {
            // Lidar com o erro, talvez definindo uma mensagem de erro
        }
        $end = $begin->copy()->addMinutes($this->duration);

        // Criação do workshop
        $workshop = new Workshop();
        $workshop->title = $this->title;
        $workshop->description = $this->description;
        $workshop->requirements = $this->requirements;
        $workshop->begin = $begin;
        $workshop->end = $end;
        $workshop->image = $this->photo->store('photos', 'public'); // Armazenar foto
        $workshop->save();

        session()->flash('message', 'Workshop cadastrado com sucesso!');
        $this->reset(); // Resetar o formulário
        $this->removeBookedSchedules(); // Atualizar horários disponíveis
    }
    public function render()
    {
        return view('livewire.workshops-empresa');
    }
}
