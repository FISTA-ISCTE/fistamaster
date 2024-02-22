<?php

namespace App\Http\Controllers;

use App\Models\CheckInConferencia;
use Illuminate\Http\Request;

class SorteioController extends Controller
{
    public function sortear()
    {
        $vencedor = CheckInConferencia::where('tipo','2')->inRandomOrder()->first();

        return view('admin.fista.sorteioOgani', compact('vencedor'));
    }
}
