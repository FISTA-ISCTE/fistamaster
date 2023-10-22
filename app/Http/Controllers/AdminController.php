<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function editarinfos($id, Request $request)
    {
        $empresa = Empresa::find($id);
        $empresa->linkedin = $request->linkedin ?? $empresa->linkedin;
        $empresa->website = $request->website ?? $empresa->website;
        $empresa->linkedin = $request->linkedin ?? $empresa->linkedin;
        $empresa->description = $request->description ?? $empresa->description;
        $empresa->others = $request->others ?? $empresa->others;
        +
            session()->flash('success', 'Dados guardados com sucesso!');
        $empresa->save();
        return redirect()->route('view.empresas', ['id' => $empresa->id]);

    }
    public function toggleMostrar($id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->mostrar = !$empresa->mostrar;
        $empresa->save();

        return back()->with('success', $empresa->mostrar ? 'Mostra empresa' : 'Não mostrar empresa');
    }
}
