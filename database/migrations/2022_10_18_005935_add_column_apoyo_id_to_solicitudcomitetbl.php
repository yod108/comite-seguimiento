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
            $table->integer('apoyoin_id')->unsigned();

            $table->foreign('apoyoin_id')
            ->references('id')
            ->on('instructortbl')
            ->onDelete('cascade');
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
            $table->dropForegin('apoyoin_id_foreign');
        });
    }
};
