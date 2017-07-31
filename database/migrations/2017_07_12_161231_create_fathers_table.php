<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFathersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fathers', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('fFirstname');
            $table->string('fMiddlename');
            $table->string('fLastname');
            $table->date('fBirthday');
            $table->string('fGender');
            $table->string('fLivingStatus');
            $table->string('fMaritalStatus');
            $table->integer('fUid')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('fUid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fathers');
    }
}
