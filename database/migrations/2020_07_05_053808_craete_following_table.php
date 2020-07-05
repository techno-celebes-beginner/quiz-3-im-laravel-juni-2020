<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CraeteFollowingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('following', function (Blueprint $table) {
            $table->increments('following_id');
            $table->bigInteger('followee')->unsigned();
            $table->bigInteger('follower')->unsigned();
            $table->timestamps();
            $table->foreign('followee')->references('user_id')->on('users');
            $table->foreign('follower')->references('user_id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
