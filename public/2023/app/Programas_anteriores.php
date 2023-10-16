<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programas_anteriores extends Model
{
    use HasFactory;
    protected $table = "programa_2022";

    /* public static function getDias() {   
    foreach(Programas::all() as $programa) { 
        $dias[] = explode("-", $programa->dia)[2];
    }
    $dias = array_unique($dias);
    return $dias;
    } */

    public static function horasDias($dia) {
        $programas = Programas_anteriores::select("horaInicio")->where("dia", "=", $dia)->distinct()->get()->sort();
        return $programas;
/*         $sql = "SELECT DISTINCT horaInicio FROM programas WHERE dia=$dia";
        $result = mysql_query($sql);
        return $result;      */   
    }
}
