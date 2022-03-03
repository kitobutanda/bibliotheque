<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class LivreMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('livre',function(Blueprint $table){
 
            $table->id();
            $table->string('matricule');
            $table->string('titre');
            $table->string('auteur');
            $table->string('edition');
            $table->string('domaine');
            $table->integer('quantite')->unsigned();
            $table->string('resume');
            $table->datetime('date_publication');
            $table->string('responsable');
        });
        //
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
