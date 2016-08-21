<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoryViewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('story_views', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('story_id');
            $table->string('ip_address');
            $table->integer('viewer_id')->default(0);
            $table->string('viewer_name')->nullable();
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
        Schema::drop('story_views');
    }
}
