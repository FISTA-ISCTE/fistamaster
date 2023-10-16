<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WorkshopPresenca extends Model
{
    use HasFactory;

    protected $table = 'workshop-presencas';

    protected $fillable = [
        'user_id',
        'workshop_id'
    ];
}
