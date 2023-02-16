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
       Schema::create('solicitudcomitetbl', function (Blueprint $table) {
            $table->engine="InnoDB";

            $table->increments('id');
            $table->string('descripcion_co');
            $table->string('documento');
            $table->date('Fecha');
            // $table->integer('code_id_pro');//id_programa
            // $table->integer('code_id_ap');//id_aprendiz
            // $table->integer('apoyo_id');//id_inst apoyo
            // $table->integer('gestor_id');//id_inst gestor

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
        Schema::dropIfExists('solicitudcomitetbl');
    }
};
