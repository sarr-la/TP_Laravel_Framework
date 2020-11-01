<?php

namespace App\Http\Controllers\operation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\OperationModel;

class OperationController extends Controller
{
    public function operation(){
      
        
    return response()->json(OperationModel::get(), 200);     
    }


}