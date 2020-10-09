<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->bigInteger('spe_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
            $table->timestamps();
        });

        Schema::table('skills', function($table) {
            $table->foreign('spe_id')
                  ->references('id')
                  ->on('specialisations');

            $table->foreign('type_id')
                  ->references('id')
                  ->on('skill_types');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('skills');
    }
}
