<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Typecompte extends Model
{
    //


    public function Compte(){
        return $this->hasMany("App\Compte");
 }

}
