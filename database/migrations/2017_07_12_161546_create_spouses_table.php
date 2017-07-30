<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSpousesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('spouses', function (Blueprint $table) {
           
            $table->increments('id');
            $table->string('sFirstname');
            $table->string('sMiddlename');
            $table->string('sLastname');
            $table->string('sGender');
            $table->date('sBirthday');
            $table->string('sLivingStatus');
            $table->string('sMaritalStatus');
            $table->integer('sUid')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('sUid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('spouses');
    }
}
