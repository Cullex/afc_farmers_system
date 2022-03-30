<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIndividualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('individuals', function (Blueprint $table) {
            $table->id();
            $table->string('inputter');
            $table->string('name');
            $table->char('dob');
            $table->char('ecoRegion');
            $table->string('landType');
            $table->integer('farmSize');
            $table->string('ward');
            $table->string('district');
            $table->string('province');
            $table->char('mobileNumber');
            $table->char('NationalId');
            $table->string('gender')->nullable();
            $table->integer('individualRegNo');
            $table->string('season');
            $table->string('maize')->nullable();
            $table->string('wheat')->nullable();
            $table->string('soyabeans')->nullable();
            $table->string('sunflower')->nullable();
            $table->string('whiteSorghum')->nullable();
            $table->string('redSorghum')->nullable();
            $table->string('sugarBeans')->nullable();
            $table->integer('seasonHectrage')->nullable();
            $table->integer('maizeHectrage')->nullable();
            $table->integer('wheatHectrage')->nullable();
            $table->integer('sugarBeansHectrage')->nullable();
            $table->integer('sunflowerHectrage')->nullable();
            $table->integer('red_sorghumHectrage')->nullable();
            $table->integer('white_sorghumHectrage')->nullable();
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
        Schema::dropIfExists('individuals');
    }
}
