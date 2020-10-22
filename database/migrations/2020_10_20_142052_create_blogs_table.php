<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBlogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('sub_id');
            $table->foreign('sub_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('title');
            $table->longText('description');
            $table->string('photo')->nullable();
            $table->longText('gallery')->nullable();
            $table->longText('video')->nullable();
            $table->integer('views')->default('0');
            $table->integer('status')->default('1');
            $table->integer('likes')->default('0');
            $table->integer('comments')->default('0');
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
        Schema::dropIfExists('blogs');
    }
}
