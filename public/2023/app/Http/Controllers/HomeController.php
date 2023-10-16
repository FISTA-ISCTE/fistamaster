<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Invite;
use App\Empresa;
use App\Feed;
use App\Teste;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Workshop;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(['auth' => 'verified']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(Request $request)
    {
        $user = User::where('uuid', Auth::user()->uuid)->first();
        $invite = Invite::where('uuid_convidado', Auth::user()->uuid)->first();
        if ($invite != null) {
            $userreg = User::where('uuid', $invite->uuid_convidar)->first();
            $total = $userreg->pontos + 50;
            $userreg->count_conv = $userreg->count_conv + 1;
            $userreg->pontos = $total;
            $userreg->save();
            $invite->delete();
        }
  
        $search=request()->query('search');
        if($search){
            $feed=0;
            //$data=DB::table('feeds')->orderBy('id', 'desc')->paginate(4);
           
            if(empty($empresas)== false){
                $feed=collect(['VAZIO']);
            }
                $feed=DB::table('empresas')->where('nome_empresa', 'LIKE', '%'.$search.'%')->join('feeds','feeds.id_empresa','=','empresas.id')->orderBy('feeds.id', 'desc')->paginate(6);
        }else{
            $feed=DB::table('feeds')->orderBy('id', 'desc')->paginate(6);
        }
        return view('home', ['feed'=>$feed])->with('invite', $invite);
    }
    public function minhaConta($uuid)
    {
        $user = User::where('uuid', $uuid)->first();
        return View::make('profile')->with('user', $user);
    }
}