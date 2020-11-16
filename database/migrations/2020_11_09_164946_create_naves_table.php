<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('naves', function (Blueprint $table) {
            $table->charset = 'utf8';
            $table->collation = 'utf8_unicode_ci';
            $table->bigIncrements('id');
            $table->char('name', 50);
            $table->char('model', 100);
            $table->char('manufacturer', 100);
            $table->integer('passengers')->nullable();
            $table->float('length', 8, 2)->nullable();
            $table->char('starship_class',100);
            $table->integer('max_atmosphering_speed')->nullable();
            $table->timestamps();
            $table->unsignedBigInteger('user_id');
        });

        Schema::table('naves', function (Blueprint $table) {
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
        Schema::dropIfExists('naves');
    }
}
