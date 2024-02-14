<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programas extends Model
{
    use HasFactory;
    protected $table = "programas";
    public static function horasDias($dia)
    {
        $programas = Programas::select("horaInicio")->where("dia", "=", $dia)->distinct()->get()->sort();
        return $programas;
        /*         $sql = "SELECT DISTINCT horaInicio FROM programas WHERE dia=$dia";
                $result = mysql_query($sql);
                return $result;      */
    }
}
