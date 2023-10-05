<?php

namespace App\Http\Controllers;

use App\Mail\RegistoEmpresa;
use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Billing;
use App\Models\Logistica;
use App\Models\Workshop;
use Illuminate\Support\Facades\Mail;

class EmpresaController extends Controller
{
    //

    public function registarempresa(Request $request)
    {
        //dd($request->price_simulation);
        $request->validate([
            'avatar' => 'required|nullable|image|mimes:jpeg,png,jpg|max:2048',
            'company_name' => 'required',
            'company_desc'=> 'required',
            'company_plan'=> 'required',
            'contact_name'=> 'required',
            'contact_number'=> 'required',
            'contact_email'=> 'required',
            'price_simulation'=> 'required',
        ],[
            'avatar.required' => 'O Logotipo da empresa é obrigatório.',
            'company_name.required'  => 'O nome da empresa é obrigatório.',
            'company_desc.required' => 'A descrição da empresa é obrigatório.',
            'company_plan.required'  => 'O Plano da empresa é obrigatório.',
            'contact_name.required' => 'Nome para contacto é obrigatório.',
            'contact_number.required'  => 'Numero de telemóvel para contacto é obrigatório.',
            'contact_email.required' => 'O email para contacto é obrigatório.',
            'price_simulation.required'  => 'O preço é obrigatório! Caso dê este erro tente outra vez. Caso o problema continue, contacte-nos fista@iscte-iul.pt',
        ]);

        if ($request->day1 == null && $request->day2 == null) {
            return redirect('/registarEmpresa?type=' . $request->company_plan)
                ->withErrors(['day' => ["Escolha um dia para o pacote. Caso estejam todos esgotados por favor escolha outra pacote."]])
                ->withInput();
        }

        $empresa = new Empresa();
        $empresa->nome_empresa = $request->company_name;
        $empresa->pequena_descricao = $request->company_desc;
        $empresa->plano = $request->company_plan;
        $empresa->nome_user = $request->contact_name;
        $empresa->telemovel = $request->contact_number;
        $empresa->total = $request->price_simulation;
        $request->cvs == null ? ($empresa->cvs = 0) : ($empresa->cvs = $request->cvs);
        $request->workshop == null ? ($empresa->worshop = 0) : ($empresa->worshop = $request->workshop);
        $request->itspeedtalks == null ? ($empresa->itspeedtalks = 0) : ($empresa->itspeedtalks = $request->itspeedtalks);
        $request->backoffice == null ? ($empresa->backoffice = 0) : ($empresa->backoffice = $request->backoffice);
        $request->cocktail == null ? ($empresa->cocktail = 0) : ($empresa->cocktail = $request->cocktail);

        if ($request->company_plan == 'premium') {
            $empresa->plano_num = 2;
            $empresa->cvs = 1;
            $empresa->worshop = 1;
            $empresa->itspeedtalks = 1;
            $empresa->backoffice = 1;
        } elseif ($request->company_plan == 'gold') {
            $empresa->plano_num = 3;
            $empresa->cvs = 1;
            $empresa->cocktail = 0;
        } elseif ($request->company_plan == 'silver') {
            $empresa->plano_num = 4;
            $empresa->cocktail = 0;
            $empresa->itspeedtalks = 0;
        }
        $empresa->modelo_workshop = $request->workshop_option;
        $empresa->dia1 = $request->day1;
        $empresa->dia2 = $request->day2;
        $empresa->almocos_extra = $request->almoco_number;
        $empresa->email = $request->contact_email;
        $empresa->save();

        if (strcmp($empresa->plano, 'premium') == 0 || $empresa->worshop == 1) {
            $workshop = new Workshop();
            $workshop->company = $empresa->nome_empresa;
            $workshop->save();
        }

        $logistica = new Logistica();
        $logistica->id_empresa = $empresa->id;
        $logistica->save();

        $fatura = new Billing();
        $fatura->id_empresa = $empresa->id;
        $fatura->save();

        if ($request->file('avatar')) {
            $file = $request->file('avatar');
            $filename = $empresa->id . time() . '.' . $file->getClientOriginalExtension();
            $request->avatar->storeAs('/users/empresas', $filename);
            $empresa->avatar = 'users/empresas/' . $filename;
        }

        $empresa->save();
        $emailsend = $request->contact_email;

        $empresfind = Empresa::where('nome_empresa', $request->company_name)->first();
        Mail::to($emailsend)->send(new RegistoEmpresa($empresa->nome_empresa, $empresa->plano, $empresa->total));
        return redirect()->route('confirmacao1');
    }
}
