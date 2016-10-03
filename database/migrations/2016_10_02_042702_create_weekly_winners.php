<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWeeklyWinners extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('weekly_winners', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('story_id')->default(0);
            $table->text('description')->nullable();
            $table->integer('weekly_period_id');
            $table->integer('weekly_prize_id');
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
        Schema::drop('weekly_winners');
    }
}
