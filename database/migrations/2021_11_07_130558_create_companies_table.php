<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompaniesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id();
            $table->string('inputter');
            $table->string('companyName');
            $table->string('contactPerson');
            $table->char('dob');
            $table->char('ecoRegion');
            $table->string('landType');
            $table->integer('farmSize');
            $table->string('ward');
            $table->string('district');
            $table->string('province');
            $table->char('mobileNumber');
            $table->char('NationalId');
            $table->string('regNumber');
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
        Schema::dropIfExists('companies');
    }
}
