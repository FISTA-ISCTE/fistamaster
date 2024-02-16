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
    public $url;
    public $atendees;
    public $data;
    public $photoPreview;
    public $schedule;
    public $duration;
    public $image;
    public $availableSchedules = []; // Horários disponíveis

    public function mount()
    {
        $empresa = Empresa::where("id", Auth::user()->id_empresa)->first();
        $workshop = Workshop::where("company", $empresa->nome_empresa)->first();
        if (isset($workshop->image)) {
            $this->image = "https://fista.iscte-iul.pt/storage/" . $workshop->image;
        }

        if (isset($workshop->title)) {
            $this->title = $workshop->title;
        } else {
            $this->title = "";
        }
        if (isset($workshop->description)) {
            $this->description = $workshop->description;
        } else {
            $this->description = "";
        }
        if (isset($workshop->requirements)) {
            $this->requirements = $workshop->requirements;
        } else {
            $this->requirements = "";
        }
        if (isset($workshop->begin)) {
            $this->schedule = $workshop->begin;
        }
        if (isset($workshop->atendees)) {
            $this->atendees = $workshop->atendees;
        }
        if (isset($this->schedule)) {
            $this->data = "Inicio: " . $workshop->begin . " Fim: " . $workshop->end;
        }
        // Inicialize availableSchedules com horários disponíveis
        $this->availableSchedules = [
            '2024-02-20 09:00:00' => '20 de Fevereiro, 09:00 - 12:30',
            '2024-02-20 14:30:00' => '20 de Fevereiro, 14:30 - 16:00',

            '2024-02-21 09:00:00' => '21 de Fevereiro, 09:00 - 12:30',
            '2024-02-21 14:30:00' => '21 de Fevereiro, 14:30 - 16:00',

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
            'url' => 'nullable|url', // Verifica se o campo é um URL válido, mas é opcional
            // Inclua as validações para os outros campos aqui
        ]);
        // Tratamento dos horários
        $begin = Carbon::createFromFormat('Y-m-d H:i:s', $this->schedule);
        if (!$begin) {
            // Lidar com o erro, talvez definindo uma mensagem de erro
            session()->flash('error', 'O formato da data/hora do início é inválido.');
            return;
        }

        $end = $begin->copy()->addMinutes($this->duration);

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
        $workshop->link = $this->url;
        $workshop->atendees = $this->atendees;
        $workshop->company = $empresa->nome_empresa; // Assegura que a empresa está associada ao workshop
        if (isset($this->photo) || $this->photo != null) {
            $workshop->image = $this->photo->store('photos', 'public'); // Armazenar foto
        }


        // Salva ou atualiza o registro no banco de dados
        $workshop->save();

        session()->flash('success', 'Workshop registado com sucesso!');
        $this->reset(); // Resetar o formulário
        // Atualizar horários disponíveis
    }

    public function render()
    {
        return view('livewire.workshops-empresa');
    }
}
