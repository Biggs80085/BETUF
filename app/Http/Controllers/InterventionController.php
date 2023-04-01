<?php

namespace App\Http\Controllers;

use App\Models\Intervention;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class InterventionController extends Controller
{
    function index(){
        return view('admin.addIntervention');
    }

    function indexPlanning(){
        $user = DB::table('users')
            ->join('interventions', 'users.id', '=', 'interventions.userID')
            ->where('interventions.dateIntervention', '>', now())
            ->where('users.id' , '=', Auth::user()->id)
            ->orderBy('interventions.dateIntervention', 'asc')
            ->first();
        if($user == null)
            $user = Auth::user();
        return view('planning', ['user' => $user]);
        
    }

    function add(Request $request){
        Intervention::create([
            'tunnelID' => $request->tunnelID,
            'userID' => $request->userID,
            'title' => $request->title,
            'dateIntervention' => $request->dateIntervention,
            'dateFinIntervention' => $request->dateFinIntervention,
            'description' => $request->description,
            'typeVisite' => $request->typeVisite
        ]);
     
        return back()->with("success","Intervention Added");
    }
}
