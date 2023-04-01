<?php

namespace App\Http\Controllers;

use App\Models\Tunnel;
use Illuminate\Http\Request;

class TunnelController extends Controller
{
    function index(){
        return view('admin.addTunnel');
    }
    function indexCarte(){
        return view('carte');
    }
    function add(Request $request){
        Tunnel::create([
            'coordGPS' => $request->coordGPS,
            'ville' => $request->ville,
            'codePostal' => $request->codePostal,
            'hauteurTunnel' => $request->hauteurTunnel,
            'nbTube' => $request->nbTube,
            'nbVoieParTube' => $request->nbVoieParTube,
            'anneeConstruction' => $request->anneeConstruction,
            'numMAGALI' => $request->numMAGALI,
            'numAGORA' => $request->numAGORA,
        ]);
     
        return back()->with("success","Tunnel Added");
    }
}
