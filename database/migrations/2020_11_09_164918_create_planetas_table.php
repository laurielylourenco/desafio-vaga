<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlanetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('planetas', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->bigIncrements('id');
            $table->string('name',20);
            $table->integer('rotation_period')->nullable();
            $table->integer('orbital_period')->nullable();
            $table->integer('diameter')->nullable();
            $table->string('climate',20);
            $table->char('gravity',50);
            $table->text('terrain');
            $table->integer('surface_water')->nullable();
            $table->bigInteger('population')->nullable();
            
            $table->unsignedBigInteger('user_id');
            
            $table->timestamps();
        });

        Schema::table('planetas', function (Blueprint $table) {
             
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('planetas');
    }
}
