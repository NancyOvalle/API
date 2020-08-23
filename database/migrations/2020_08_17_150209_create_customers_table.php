<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('users_id')->unsigned();
            $table->foreign('users_id')->references('id')->on('users');
            $table->bigInteger('academic_titles_id')->unsigned();
            $table->foreign('academic_titles_id')->references('id')->on('academic_titles');
            $table->bigInteger('work_experience_id')->unsigned();
            $table->foreign('work_experience_id')->references('id')->on('work_experience');
            $table->bigInteger('user_availability_id')->unsigned();
            $table->foreign('user_availability_id')->references('id')->on('user_availability');
            $table->bigInteger('job_profile_id')->unsigned();
            $table->foreign('job_profile_id')->references('id')->on('job_profile');
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
        Schema::dropIfExists('customers');
    }
}
