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
        Schema::table('programatbl', function (Blueprint $table) {
            // $table->integer('code_id_in')->unsigned();

            // $table->foreign('code_id_in')
            // ->references('id')->on('instructor_table')->onDelete("cascade");

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('programatbl', function (Blueprint $table) {
            // $table->dropForeign('code_id_in_foreign');
        });
    }
};
