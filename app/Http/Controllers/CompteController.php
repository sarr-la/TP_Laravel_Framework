<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CompteController extends Controller
{
    //


    public function add(){
        
        return view('home');
     }
    public function persist(Request $request)
    {


        echo 2;
    $compte = new \App\Compte();
    $compte->cleRip = $request->input('cleRip');
    $compte->Etat = $request->input('Etat');
    $compte->typecompte = $request->input('typecompte');
    $compte->datedebut = $request->input('datedebut');
    $compte->datefin = $request->input('datefin');
    $compte->numCmpte = $request->input('numCmpte');
    $compte->Frouverture = $request->input('Frouverture');
    $compte->Solde = $request->input('Solde');
    $compte->numAgence = $request->input('numAgence');
    $compte->Agios = $request->input('Agios');
    $compte->save();
    return redirect('/home');
    }

}