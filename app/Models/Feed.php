<?php

namespace App\Models;
use App\Models\Empresa;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feed extends Model
{
    use HasFactory;
    protected $table="feeds";


    public function empresa()
    {
        return $this->belongsTo('App\Models\Empresa', 'id_empresa');
    }
}
