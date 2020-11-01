<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CompteModel extends Model
{

    protected $table = "comptes";

    protected $fillable = [

        'cleRip',
        'Etat',
        'typecompte',
        'datedebut',
        'datefin',
        'numCmpte',
        'Frouverture',
        'Solde',
        'numAgence',
        'Agios',

    ];


}
