<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('user_id');
            $table->string('body_comment')->nullable();
            $table->integer('commentable_id')->nullable();
            $table->string('commentable_type')->nullable();
            $table->integer('likeable_id')->nullable();
            $table->string('likeable_type')->nullable();
            $table->integer('ratingable_id')->nullable();
            $table->string('ratingable_type')->nullable();
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
        Schema::dropIfExists('activities');
    }
}
