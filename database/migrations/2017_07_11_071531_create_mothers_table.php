<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMothersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mothers', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('mFirstname');
            $table->string('mMiddlename');
            $table->string('mLastname');
            $table->date('mBirthday');
            $table->string('mGender');
            $table->string('mLivingStatus');
            $table->string('mMaritalStatus');
            $table->integer('mUid')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('mUid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mothers');
    }
}
