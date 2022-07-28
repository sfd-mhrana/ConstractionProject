<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Projecttable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('project', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('user_id');
            $table->string('client_name');
            $table->string('client_phone');
            $table->string('client_address');
            $table->string('project_id');
            $table->string('project_name');
            $table->string('project_address');
            $table->string('project_budgect');
            $table->string('creating_date');
            $table->string('starting_date');
            $table->string('ending_date');
            $table->string('target_time');
            $table->string('project_status');
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
        Schema::dropIfExists('project');
    }
}
