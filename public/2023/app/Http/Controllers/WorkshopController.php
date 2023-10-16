<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Workshop;
use App\User;

class WorkshopController extends Controller
{
    public function index()
    {
        $workshops = Workshop::all()->sortBy('begin');
        return view('workshops')->with(['workshops'=>$workshops]);
    }



    protected function create(Request $request)
    {
        $this->validate($request, [
            "title" => "required",
            "company" => "required",
            "atendeeslimit" => "required",
        ]);

        $date = new Workshop();

        $date->title = $request->title;
        $date->company = $request->company;
        $date->atendeeslimit = $request->atendeeslimit;


        $date->save();

        return redirect('/workshops')->with('sucess', 'Your article was created successfully!');
    }

    public function attacher($id)
    {
        $user = Auth::user();
        $workshop1 = Workshop::find($id);
        
        if ($user->workshopsInscritos()->get()->contains($workshop1) == false) {
            $user->workshopsInscritos()->attach($id);

            $x = $workshop1->spotsavailable;
            $y = 1;
            $workshop1->spotsavailable = $x - $y;
            $workshop1->save();
            return redirect('/workshops')->with(['sucess', 'Your article was created successfully!']);
        } else {

            return redirect('/workshops')->with(['sucess', 'Your article was created successfully!']);
        }
    } 
    public function attacher2($id)
    {
        $user = User::find(102);
        $workshop1 = Workshop::find($id);
        
        if ($user->workshopsInscritos()->get()->contains($workshop1) == false) {
            $user->workshopsInscritos()->attach($id);

            $x = $workshop1->spotsavailable;
            $y = 1;
            $workshop1->spotsavailable = $x - $y;
            $workshop1->save();
            return redirect('/workshops')->with(['sucess', 'Your article was created successfully!']);
        } else {

            return redirect('/workshops')->with(['sucess', 'Your article was created successfully!']);
        }
    } 

    public function detacher($id)
    {
        $user = Auth::user();
        $workshop1 = Workshop::find($id);

        $user->workshopsInscritos()->detach($id);
        $x = $workshop1->spotsavailable;
        $y = 1;
        $workshop1->spotsavailable = $x + $y;
        $workshop1->save();
        return redirect('/workshops')->with(['sucess', 'Your article was created successfully!']);
    }
}

