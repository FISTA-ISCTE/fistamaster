<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Apresentacoes extends Model
{
    use HasFactory;

    protected $table = "apresentacoes";

    public static function horas()
    {
        $apresentacoes = Apresentacoes::select("hora_inicio")->get()->sort();
        return $apresentacoes;
    }
}
