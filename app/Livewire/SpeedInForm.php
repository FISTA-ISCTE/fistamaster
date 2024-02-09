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
            ['id' => 1, 'nome' => '1ºano'],
            ['id' => 2, 'nome' => '2ºano'],
            ['id' => 3, 'nome' => '3ºano'],
            ['id' => 4, 'nome' => '4ºano'],
            ['id' => 5, 'nome' => '1ºano de Mestrado'],
            ['id' => 6, 'nome' => '2ºano de Mestrado'],
            ['id' => 7, 'nome' => 'Outro'],
            ['id' => 8, 'nome' => 'Não Aplicável'],
        ];

        $this->cursos = [
            ['id' => 1, 'nome' => 'Engenharia Informática'],
            ['id' => 2, 'nome' => 'Informática e Gestão de Empresas'],
            ['id' => 3, 'nome' => 'Eng. de Telecomunicações e Informática'],

            ['id' => 4, 'nome' => 'Ciência de Dados'],
            ['id' => 12, 'nome' => 'Iscte Sintra'],
            ['id' => 5, 'nome' => 'Arquitetura'],

            ['id' => 8, 'nome' => 'Professor / Docente'],
            ['id' => 9, 'nome' => 'Alumni'],
            ['id' => 10, 'nome' => 'Outro (Publico Geral)'],

            ['id' => 11, 'nome' => 'Não docente'],
            ['id' => 7, 'nome' => 'Escola Secundária']
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
