<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFollowingsTable extends Migration
{
    public function up()
    {
        Schema::create('followings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('follow_id');
            $table->timestamps();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('followings');
    }
}
