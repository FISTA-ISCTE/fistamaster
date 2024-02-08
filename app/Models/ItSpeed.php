<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItSpeed extends Model
{
    use HasFactory;
    protected $table = "itspeed";
    public function empresa()
    {
        return $this->belongsTo('App\Models\Empresa', 'id_empresa');
    }

}
