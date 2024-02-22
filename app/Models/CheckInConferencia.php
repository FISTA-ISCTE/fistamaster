<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CheckInConferencia extends Model
{
    use HasFactory;
    protected $table = 'check_in_conferencia';
    public function user()
    {
        return $this->belongsTo('App\Models\user', 'id_user');
    }
}
