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
        Schema::create('aprendiztbl', function (Blueprint $table) {
            $table->engine="InnoDB";

            $table->increments('id')->not_null;
            $table->bigInteger('documento_ap')->unique();
            $table->string('nombre_ap');
            $table->string('email_ap')->unique();
            
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
        Schema::dropIfExists('aprendiztbl');
    }
};
