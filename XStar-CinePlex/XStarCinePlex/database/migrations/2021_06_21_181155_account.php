<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Account extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('accounts', function (Blueprint $table) {

            $table->string('Account_Id');
            $table->string('fullname');
            $table->string('email')->unique();
            $table->integer('phone');
            $table->string('password');
            $table->string('gender');
            $table->date('birth');
            $table->string('preferSite');
            $table->string('image');
            $table->integer('active');
            $table->integer('role');
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
        Schema::dropIfExists('accounts');
    }
}
