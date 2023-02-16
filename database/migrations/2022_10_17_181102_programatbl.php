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
        Schema::create('programatbl', function (Blueprint $table) {
            $table->engine="InnoDB";
            
            $table->increments('id');
            $table->bigInteger('codigo_pro')->unique();
            $table->string('nombre_pro');
            $table->date('Fechaini');
                        
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
        Schema::dropIfExists('programatbl');
    }
};
