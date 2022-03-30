<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSeasonStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('season_stats', function (Blueprint $table) {
            $table->id();
            $table->string('farmerName');
            $table->string('season');
            $table->string('hectrage')->nullable();
            $table->string('crop1')->nullable();
            $table->string('crop2')->nullable();
            $table->string('crop3')->nullable();
            $table->string('crop4')->nullable();
            $table->string('crop5')->nullable();
            $table->string('crop6')->nullable();
            $table->string('crop7')->nullable();
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
        Schema::dropIfExists('season_stats');
    }
}
