<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compte extends Model
{

    //

public function Compte(){

return $this->hasMany("App\Compte");

}


public function Typecompte(){


    return $this->belongsTo("App\Typecompte");
}


}
