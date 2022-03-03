<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class RetourMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      
        schema::create('retour',function(Blueprint $table){
            $table->id();
            $table->string('emprunteur');
            $table->string('livre');
            $table->integer('quantiteR')->unsigned();
            $table->datetime('dateR');   
        });  
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
