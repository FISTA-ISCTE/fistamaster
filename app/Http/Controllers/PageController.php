<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contest;

class PageController extends Controller
{
    /**
     * Display all the static pages when authenticated
     *
     * @param string $page
     * @return \Illuminate\View\View
     */
    public function resgistar_concurso_ctf(Request $request)
    {
        $validatedData = $request->validate([
            'nome_grupo' => 'required|string|max:255',
            'nome1' => 'required|string|max:255',
            'email1' => 'required|email|max:255',
            'curso1' => 'required|string|max:255',
            'nome2' => 'required|string|max:255',
            'email2' => 'required|email|max:255',
            'curso2' => 'required|string|max:255',
            'nome3' => 'nullable|string|max:255',
            'email3' => 'nullable|email|max:255',
            'curso3' => 'nullable|string|max:255',
        ]);

        $validatedData['tipo_concurso'] = 'ctf';
        Contest::create($validatedData);

        // Retornar uma view ou redirecionar após a inserção
        return view('confirmacao');
    }
    public function resgistar_concurso_matematica(Request $request)
    {
        $validatedData = $request->validate([
            'nome_grupo' => 'required|string|max:255',
            'nome1' => 'required|string|max:255',
            'email1' => 'required|email|max:255',
            'curso1' => 'required|string|max:255',
            'nome2' => 'required|string|max:255',
            'email2' => 'required|email|max:255',
            'curso2' => 'required|string|max:255',
            'nome3' => 'nullable|string|max:255',
            'email3' => 'nullable|email|max:255',
            'curso3' => 'nullable|string|max:255',
        ]);

        $validatedData['tipo_concurso'] = 'Matematica';
        Contest::create($validatedData);

        // Retornar uma view ou redirecionar após a inserção
        return view('confirmacao');
    }
    public function resgistar_concurso_ideias(Request $request)
    {
        $validatedData = $request->validate([
            'nome_grupo' => 'required|string|max:255',
            'nome1' => 'required|string|max:255',
            'email1' => 'required|email|max:255',
            'curso1' => 'required|string|max:255',
            'nome2' => 'required|string|max:255',
            'email2' => 'required|email|max:255',
            'curso2' => 'required|string|max:255',
            'nome3' => 'nullable|string|max:255',
            'email3' => 'nullable|email|max:255',
            'curso3' => 'nullable|string|max:255',
        ]);

        $validatedData['tipo_concurso'] = 'Ideias';
        Contest::create($validatedData);

        // Retornar uma view ou redirecionar após a inserção
        return view('confirmacao');
    }
    public function index(string $page)
    {
        if (view()->exists("pages.{$page}")) {
            return view("pages.{$page}");
        }

        return abort(404);
    }

    public function vr()
    {
        return view("pages.virtual-reality");
    }

    public function rtl()
    {
        return view("pages.rtl");
    }

    public function profile()
    {
        return view("pages.profile-static");
    }

    public function signin()
    {
        return view("pages.sign-in-static");
    }

    public function signup()
    {
        return view("pages.sign-up-static");
    }
}
