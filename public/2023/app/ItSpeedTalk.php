<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItSpeedTalk extends Model
{
    use HasFactory;

    protected $table ="itspeedtalks";

    public static function horasDias($dia) {
        $itspeedtalks = ItSpeedTalk::select("horaInicio")->where('dia', "=", $dia)->distinct()->get()->sort();
        return $itspeedtalks;
    }
}
