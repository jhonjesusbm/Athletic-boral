<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAthletesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('athletes', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('nationality', array('N', 'E'));
            $table->integer('document')->unique();
            $table->string('name', 50);
            $table->string('surname', 50);
            $table->string('photo', 100)->nullable();
            $table->enum('gender', array('M','F'));
            $table->float('height')->nullable();
            $table->float('weight')->nullable();
            $table->date('birthdate');
            $table->longText('address');
            $table->integer('area')->nullable();
            $table->integer('telephone')->nullable()->unique();
            //falta posiciòn del jugador
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
        Schema::dropIfExists('athletes');
    }
}
