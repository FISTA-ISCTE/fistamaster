<?php

namespace App\Livewire;

use App\Models\SiInscricao;
use App\Models\SpeedInterview;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;

class SpeedInForm extends Component
{
    use WithFileUploads;

    public $pdfFile;
    public $ano;
    public $curso;
    public $anos = []; // Supondo que você irá preenchê-los dinamicamente
    public $cursos = []; // Supondo que você irá preenchê-los dinamicamente
    public $siId;
    public $si;

    public function mount($siId)
    {
        // Aqui você pode inicializar suas listas de anos e cursos, por exemplo:
        $this->anos = [
            ['id' => 1, 'nome' => '2021'],
            ['id' => 2, 'nome' => '2022'],
            ['id' => 3, 'nome' => '2023'],
            ['id' => 4, 'nome' => '2024'],
        ];

        $this->cursos = [
            ['id' => 1, 'nome' => 'Curso A'],
            ['id' => 2, 'nome' => 'Curso B'],
            ['id' => 3, 'nome' => 'Curso C'],
        ];
        $user = auth()->user();
        // Carrega os dados existentes do usuário autenticado
        $this->ano = $user->id_ano ?? null;
        $this->curso = $user->id_curso ?? null;

        $this->siId = $siId;
        $this->si = SpeedInterview::find($siId);


    }

    public function save()
    {
        $user = Auth::user();
        $this->validate([
            'pdfFile' => 'required|file|mimes:pdf',
            'ano' => 'required',
            'curso' => 'required'
        ]);
        if ($this-> pdfFile) {
            $file = $this->pdfFile;
            $filename = $user->id . time() . '.' . $file->getClientOriginalExtension();
            $this->pdfFile->storeAs('users/cv', $filename, 'public');
            $user->file = 'users/cv/' . $filename;
        }

        $user->id_ano = $this->ano;
        $user->id_curso = $this->curso;

        $user->save();
        $siInscricao = SiInscricao::updateOrCreate(
            ['id_user' => $user->id, 'id_si' => $this->siId], // Chaves para buscar
            [] // Valores para atualizar ou criar; deixei vazio se não há mais o que atualizar
        );
        // Processo para salvar o arquivo e as informações
        // $this->pdfFile->store('path/to/store');

        session()->flash('message', 'Arquivo enviado com sucesso!');
    }

    public function render()
    {
        return view('livewire.speed-in-form');
    }
}
