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
        Schema::table('instructortbl', function (Blueprint $table) {
            $table->integer('programa_id')->unsigned();

            $table->foreign('programa_id')
            ->references('id')
            ->on('programatbl')
            ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('instructortbl', function (Blueprint $table) {
            $table->dropForeign('programa_id_foreign');
        });
    }
};
