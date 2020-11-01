<?php

namespace App\Http\Controllers\compte;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\CompteModel;

class CompteController extends Controller
{
    public function compte(){
      
        
    return response()->json(CompteModel::get(), 200);     
    }


}