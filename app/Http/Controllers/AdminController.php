<?php

namespace App\Http\Controllers;

use App\Mail\ConfiEmpresa;
use App\Models\Empresa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class AdminController extends Controller
{
    public function editarinfos($id, Request $request)
    {
        $empresa = Empresa::find($id);
        $empresa->linkedin = $request->linkedin ?? $empresa->linkedin;
        $empresa->website = $request->website ?? $empresa->website;
        $empresa->email = $request->email ?? $request->email;
        $empresa->linkedin = $request->linkedin ?? $empresa->linkedin;
        $empresa->description = $request->description ?? $empresa->description;
        $empresa->others = $request->others ?? $empresa->others;
        $empresa->plano = $request->plano ?? $empresa->plano;
        $empresa->total = $request->total ?? $empresa->total;
        if ($request->file('avatar')) {
            $file = $request->file('avatar');
            $filename = $empresa->id . time() . '.' . $file->getClientOriginalExtension();
            $request->avatar->storeAs('users/empresas', $filename, 'public');
            $empresa->avatar = 'users/empresas/' . $filename;
        }
        session()->flash('success', 'Dados guardados com sucesso!');
        $empresa->save();
        return redirect()->route('view.empresas', ['id' => $empresa->id]);

    }
    public function toggleMostrar($id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->mostrar = !$empresa->mostrar;
        $empresa->save();
        Mail::to($empresa->email)->send(new ConfiEmpresa($empresa->id));
        return back()->with('success', $empresa->mostrar ? 'Mostra empresa' : 'Não mostrar empresa');
    }
}
