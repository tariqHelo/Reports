<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id();
            $table->string('title')->nullable();

            $table->date('sdate');
            $table->date('edate')->nullable();
            $table->string('worktime')->nullable();
            $table->longText('note')->nullable();

            $table->foreignId("employee_id")->nullable();
            $table->foreign('employee_id')->references('id')->on("employees")->cascadeOnDelete()->cascadeOnUpdate();


            $table->foreignId("statue_id")->nullable();
            $table->foreign('statue_id')->references('id')->on("task_statuses")->cascadeOnDelete()->cascadeOnUpdate();


            $table->foreignId("type_id")->nullable();
            $table->foreign('type_id')->references('id')->on("tasks_types")->cascadeOnDelete()->cascadeOnUpdate();


            $table->foreignId("administration_id")->nullable();
            $table->foreign('administration_id')->references('id')->on("administrations")->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreignId("section_id")->nullable();
            $table->foreign('section_id')->references('id')->on("sections")->cascadeOnDelete()->cascadeOnUpdate();

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
        Schema::dropIfExists('tasks');
    }
}
