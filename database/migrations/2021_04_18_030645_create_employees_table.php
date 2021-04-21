<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');

            // $table->string('numberId');
            // $table->string('name');
            // $table->string('jobtitle');
            // $table->string('email');
            // $table->string('phone');
            // $table->string('password');

            // $table->foreignId("public_id")->nullable();
            // $table->foreign('public_id')->references('id')->on("public_administrations")->cascadeOnDelete()->cascadeOnUpdate();

            // $table->foreignId("branche_id")->nullable();
            // $table->foreign('branche_id')->references('id')->on("branches")->cascadeOnDelete()->cascadeOnUpdate();
            
            // $table->foreignId("administration_id")->nullable();
            // $table->foreign('administration_id')->references('id')->on("administrations")->cascadeOnDelete()->cascadeOnUpdate();

            // $table->foreignId("section_id")->nullable();
            // $table->foreign('section_id')->references('id')->on("sections")->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('employees');
    }
}
