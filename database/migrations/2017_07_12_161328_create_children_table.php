<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) 
        {
            $table->increments('id');
            $table->string('cFirstname');
            $table->string('cMiddlename');
            $table->string('cLastname');
            $table->date('cBirthday');
            $table->string('cGender');
            $table->string('cLivingStatus');
            $table->string('cMaritalStatus');
            $table->integer('cUid')->unsigned()->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('cUid')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('children');
    }
}
