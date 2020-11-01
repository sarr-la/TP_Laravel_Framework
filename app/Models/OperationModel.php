<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OperationModel extends Model
{

    protected $table = "operation";

    protected $fillable = [

        'type_operation_id',
        'compte_id',
        'typecompte',
        'montant',
        'date_operation',

    ];


}
