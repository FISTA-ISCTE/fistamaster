<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiInscricao extends Model
{
    use HasFactory;
    protected $table = 'si_inscricao'; // Nome da tabela no banco de dados

    protected $fillable = ['id_user', 'id_si'];
}
