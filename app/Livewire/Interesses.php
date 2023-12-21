<?php

namespace App\Livewire;

use App\Models\Ano;
use App\Models\BackOfficeAluno;
use App\Models\Curso;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class Interesses extends Component
{
    use WithFileUploads;
    public $file;
    public $year;
    public $anos;
    public $course;
    public $cursos;
    public $interest1;
    public $interest2;
    public $birthdate;
    public $email;
    public $workType = [];



    public function mount()
    {
        $this->anos = Ano::all();
        $this->cursos = Curso::all();
        $this->email = Auth::user()->email;
        $this->year = Auth::user()->id_ano;
        $this->course = Auth::user()->id_curso;
        $existe = BackOfficeAluno::where('id_user', Auth::user()->id)->first();
        $back = BackOfficeAluno::where('id_user', Auth::user()->id)->first();
        if (isset($existe->areainteresse1) && isset($existe->areainteresse2) && isset($existe->datanascimento) && isset($back->fulltime) && isset($back->estagioverao) && isset($back->parttime)) {
            $this->interest1 = $existe->areainteresse1;
            $this->interest2 = $existe->areainteresse2;
            $this->birthdate = $existe->datanascimento;
            if ($back->fulltime) {
                $this->workType[] = '1'; // Representando fulltime
            }
            if ($back->estagioverao) {
                $this->workType[] = '2'; // Representando estagioverao
            }
            if ($back->parttime) {
                $this->workType[] = '3'; // Representando parttime
            }
        }

    }

    public function submit()
    {

        $user = Auth::user();

        $this->validate([
            'file' => 'max:2024', // Exemplo de regras de validação
        ]);

        if ($this->file) {
            $file = $this->file;
            $filename = $user->id . time() . '.' . $file->getClientOriginalExtension();
            $this->file->storeAs('users/cv', $filename, 'public');
            if ($user->file === null) {
                $user->pontos += 1000;
            }
            $user->file = 'users/cv/' . $filename;


        }
        if (isset($this->course) || isset($this->year)) {
            $user->id_curso = $this->course;
            $user->id_ano = $this->year;
        }

        if (isset($this->interest1) || isset($this->interest2)) {
            $existe = BackOfficeAluno::where('id_user', $user->id)->first();
            if (!$existe) {
                $back = new BackOfficeAluno;
                $back->id_user = $user->id;
                $back->email = $this->email;
                $back->areainteresse1 = $this->interest1;
                $back->areainteresse2 = $this->interest2;
                $back->datanascimento = $this->birthdate;
                foreach ($this->workType as $type) {
                    if ($type) {
                        if ($type == 1) {
                            if ($back->fulltime == 0) {
                                $back->fulltime = 1;
                                $back->save();
                            } else {
                                $back->fulltime = 0;
                                $back->save();
                            }
                        }
                        if ($type == 2) {
                            if ($back->estagioverao == 0) {
                                $back->estagioverao = 1;
                                $back->save();
                            } else {
                                $back->estagioverao = 0;
                                $back->save();
                            }

                        }
                        if ($type == 3) {
                            if ($back->parttime == 0) {
                                $back->parttime = 1;
                                $back->save();
                            } else {
                                $back->parttime = 0;
                                $back->save();
                            }
                        }
                    }

                }


                $back->save();
            } else {
                $back = $existe;
                $back->id_user = $user->id;
                $back->email = $this->email;
                $back->areainteresse1 = $this->interest1;
                $back->areainteresse2 = $this->interest2;
                $back->datanascimento = $this->birthdate;
                foreach ($this->workType as $type) {

                    if (isset($type)) {
                        if ($type == 1) {
                            if ($back->fulltime == 0) {
                                $back->fulltime = 1;
                                $back->save();
                            } else {
                                $back->fulltime = 0;
                                $back->save();
                            }
                        }
                        if ($type == 2) {
                            if ($back->estagioverao == 0) {
                                $back->estagioverao = 1;
                                $back->save();
                            } else {
                                $back->estagioverao = 0;
                                $back->save();
                            }

                        }
                        if ($type == 3) {
                            if ($back->parttime == 0) {
                                $back->parttime = 1;
                                $back->save();
                            } else {
                                $back->parttime = 0;
                                $back->save();
                            }
                        }
                    }

                }
                $back->save();
            }


        }

        $user->save();
        // Validação e lógica de envio
    }

    public function render()
    {
        return view('livewire.interesses');
    }
}
