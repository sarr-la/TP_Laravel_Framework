<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateComptesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comptes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cleRip');
            $table->integer('Etat');
            $table->string('typecompte');
            $table->date('datedebut');
            $table->date('datefin');
            $table->integer('numCmpte');
            $table->string('Frouverture');
            $table->string('Solde');
            $table->string('numAgence');
            $table->string('Agios');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comptes');
    }
}
