<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orador extends Model
{
    use HasFactory;
    protected $table = "oradors";
    protected $fillable = ['nome', 'imagem', 'bio', 'url', 'cargo', 'it_speed_id', 'idEmpresa'];

    public function itSpeed()
    {
        return $this->belongsTo(ItSpeed::class);
    }
}
