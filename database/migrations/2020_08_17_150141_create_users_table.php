<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('names', 45);
            $table->string('lastnames', 45);
            $table->string('email', 145);
            $table->string('phone', 45);
            $table->string('residence_address', 145);
            $table->bigInteger('job_profile_id')->unsigned();
            $table->foreign('job_profile_id')->references('id')->on('job_profile');
            $table->bigInteger('work_experience_id')->unsigned();
            $table->foreign('work_experience_id')->references('id')->on('work_experience');
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
        Schema::dropIfExists('users');
    }
}
