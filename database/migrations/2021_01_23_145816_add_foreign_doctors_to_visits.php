<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignDoctorsToVisits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visits',function(Blueprint $table){
            $table->integer('doctor_id')->unsigned()->change();
            $table->foreign('doctor_id','visits_doctor_id_foreign')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visits',function(Blueprint $table){
            $table->dropForeign('visits_doctor_id_foreign');
        });
    }
}
