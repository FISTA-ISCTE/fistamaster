<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckInTenda extends Model
{
    use HasFactory;
    protected $table = 'check_in_tenda';
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'id_user');
    }
}
