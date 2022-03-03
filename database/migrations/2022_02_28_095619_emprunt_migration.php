<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EmpruntMigration extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        schema::create('emprunt',function(Blueprint $table)
        {
            $table->id();
            $table->string('emprunteur');
            $table->string('livre_emprunter');
            $table->unsignedinteger('quantite_prise');
            $table->datetime('date_emprunt');

           
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
