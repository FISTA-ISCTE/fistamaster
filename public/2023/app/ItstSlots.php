<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItstSlots extends Model
{
    use HasFactory;
    protected $table = 'itst-slots';

    protected $fillable = [
        'empresa_id',
    ];
}
