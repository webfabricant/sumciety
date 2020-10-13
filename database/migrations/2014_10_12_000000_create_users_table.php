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
            $table->string('firstname')->nullable();
            $table->string('lastname')->nullable();
            $table->string('email')->unique();
            $table->string('role');
            $table->string('profile_image')->nullable();
            $table->string('phone');
            $table->string('dob')->nullable();
            $table->string('city');
            $table->string('country');
            $table->string('link')->nullable();
            $table->string('address')->nullable();
            $table->longtext('about')->nullable();
            $table->string('gender')->nullable();
            $table->string('otp')->nullable();
            $table->integer('account_status')->default('0');
            $table->string('rate_perhour')->nullable();
            $table->timestamp('expire_at')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
