<?php

namespace App\Livewire;

use App\Models\Empresa;
use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\Workshop;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class WorkshopsEmpresa extends Component
{
    use WithFileUploads;

    public $title;
    public $description;
    public $requirements;
    public $photo;
    public $atendees;
    public $data;
    public $photoPreview;
    public $schedule;
    public $duration;
    public $availableSchedules = []; // Horários disponíveis

    public function mount()
    {
        $empresa = Empresa::where("id", Auth::user()->id_empresa)->first();
        $workshop = Workshop::where("company", $empresa->nome_empresa)->first();

        $this->title = $workshop->title;
        $this->description = $workshop->description;
        $this->requirements = $workshop->requirements;
        $this->schedule = $workshop->begin;

        if (isset($this->schedule)) {
            $this->data = "Inicio: " . $workshop->begin . " Fim: " . $workshop->end;
        }
        // Inicialize availableSchedules com horários disponíveis
        $this->availableSchedules = [
            '2024-02-20 09:00:00' => '20 de Fevereiro, 09:00 - 12:30',
            '2024-02-20 14:30:00' => '20 de Fevereiro, 14:30 - 16:00',
            '2024-02-20 16:00:00' => '20 de Fevereiro, 16:00 - 17:30',

            '2024-02-21 09:00:00' => '21 de Fevereiro, 09:00 - 12:30',
            '2024-02-21 14:30:00' => '21 de Fevereiro, 14:30 - 16:00',
            '2024-02-21 16:00:00' => '21 de Fevereiro, 16:00 - 17:30',

            '2024-02-27 09:00:00' => '27 de Fevereiro, 09:00 - 12:30',
            '2024-02-27 14:30:00' => '27 de Fevereiro, 14:30 - 16:00',
            '2024-02-27 16:00:00' => '27 de Fevereiro, 16:00 - 17:30',

            // Adicione mais conforme necessário
        ];

        // Buscar datas reservadas na tabela workshops
        $reservedDates = Workshop::whereIn('begin', array_keys($this->availableSchedules))
            ->pluck('begin')
            ->toArray();


        // Filtrar $availableSchedules, removendo datas reservadas
        $this->availableSchedules = array_filter($this->availableSchedules, function ($key) use ($reservedDates) {
            return !in_array($key, $reservedDates);
        }, ARRAY_FILTER_USE_KEY);

    }



    public function submit()
    {
        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'requirements' => 'required',
            'photo' => 'image|max:2024', // Validação de imagem
            'schedule' => 'required',
            'duration' => 'required',
        ]);

        // Tratamento dos horários
        $begin = Carbon::createFromFormat('Y-m-d H:i:s', $this->schedule);
        if (!$begin) {
            // Lidar com o erro, talvez definindo uma mensagem de erro
            session()->flash('error', 'O formato da data/hora do início é inválido.');
            return;
        }

        $end = $begin->copy()->addMinutes($this->duration);
        $this->photoPreview = $this->photo->temporaryUrl();

        // Busca a empresa associada ao usuário autenticado
        $empresa = Empresa::where("id", Auth::user()->id_empresa)->first();
        if (!$empresa) {
            // Lidar com o erro, talvez definindo uma mensagem de erro
            session()->flash('error', 'Empresa não encontrada.');
            return;
        }

        // Busca um workshop existente ou cria um novo
        $workshop = Workshop::where("company", $empresa->nome_empresa)->firstOrNew();

        // Atualiza ou define as propriedades do workshop
        $workshop->title = $this->title;
        $workshop->description = $this->description;
        $workshop->requirements = $this->requirements;
        $workshop->begin = $begin;
        $workshop->end = $end;
        $workshop->atendees = $this->atendees;
        $workshop->company = $empresa->nome_empresa; // Assegura que a empresa está associada ao workshop
        $workshop->image = $this->photo->store('photos', 'public'); // Armazenar foto

        // Salva ou atualiza o registro no banco de dados
        $workshop->save();

        session()->flash('success', 'Token inserido com sucesso!');
        $this->reset(); // Resetar o formulário
        // Atualizar horários disponíveis
    }

    public function render()
    {
        return view('livewire.workshops-empresa');
    }
}
