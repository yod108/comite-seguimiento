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
        Schema::table('solicitudcomitetbl', function (Blueprint $table) {
            //$table->integer('code_id_pro')->unsigned();

            // $table->foreign('code_id_pro')
            // ->references('id')->on('programa_table')->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('solicitudcomitetbl', function (Blueprint $table) {
            //$table->dropForeign('code_id_pro_foreign');
        });
    }
};
