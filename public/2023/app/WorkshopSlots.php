<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopSlots extends Model
{
    use HasFactory;
    protected $table = 'workshop-slots';

    protected $fillable = [
        'empresa_id',
    ];
}
