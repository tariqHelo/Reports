<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdministrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administrations', function (Blueprint $table) {
            $table->id();
            $table->string('title');

          
            $table->foreignId("public_id")->nullable();
            $table->foreign('public_id')->references('id')->on("public_administrations")->cascadeOnDelete()->cascadeOnUpdate();
 
            $table->foreignId("branche_id")->nullable();
            $table->foreign('branche_id')->references('id')->on("branches")->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignId("user_id")->nullable();
            $table->foreign('user_id')->references('id')->on("users")->cascadeOnDelete()->cascadeOnUpdate();
  
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
        Schema::dropIfExists('administrations');
    }
}
