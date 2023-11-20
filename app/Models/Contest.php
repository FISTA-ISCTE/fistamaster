<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contest extends Model
{
    use HasFactory;
    protected $fillable = ['nome_grupo','tipo_concurso','nome1', 'email1', 'curso1', 'nome2', 'email2', 'curso2', 'nome3', 'email3', 'curso3'];
    protected $table = 'contests';
}
