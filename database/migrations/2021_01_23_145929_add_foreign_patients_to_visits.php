<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignPatientsToVisits extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visits',function(Blueprint $table){
            $table->integer('patient_id')->unsigned()->change();
            $table->foreign('patient_id','visits_patient_id_foreign')->references('id')->on('users');
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
            $table->dropForeign('visits_patient_id_foreign');
        });
    }
}
