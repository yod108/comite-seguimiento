<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('instructortbl', function (Blueprint $table) {
            $table->engine="InnoDB";

            $table->increments('id');
            $table->bigInteger('documento_in')->unique();
            $table->string('nombre_in');
            $table->string('email_in')->unique();
            // $table->string('profesion_in');
            //$table->integer('code_id_pro')->unsigned();

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
        Schema::dropIfExists('instructortbl');
    }
};
