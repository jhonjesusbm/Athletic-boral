<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepresentativesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('representatives', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('nationality', array('N', 'E'));
            $table->integer('document')->unique();
            $table->string('name', 50);
            $table->string('surname', 50);
            $table->enum('gender', array('M','F'));
            $table->date('birthdate');
            $table->longText('address');
            $table->integer('area');
            $table->integer('telephone')->unique();
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
        Schema::dropIfExists('representatives');
    }
}
