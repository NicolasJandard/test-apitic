<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCharactersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('characters', function (Blueprint $table) {
            $table->id();
            $table->string('pseudo');
            $table->bigInteger('race_id')->unsigned();
            $table->bigInteger('job_id')->unsigned();
            $table->bigInteger('specialisation_id')->unsigned();
            $table->bigInteger('skill_id')->unsigned();
            $table->bigInteger('armor_id')->unsigned();
            $table->integer('health');
            $table->string('owner');
            $table->timestamps();
        });

        Schema::table('characters', function($table) {
            $table->foreign('race_id')
                  ->references('id')
                  ->on('races');

            $table->foreign('job_id')
                  ->references('id')
                  ->on('jobs');

            $table->foreign('specialisation_id')
                  ->references('id')
                  ->on('specialisations');

            $table->foreign('skill_id')
                  ->references('id')
                  ->on('skills');

            $table->foreign('armor_id')
                  ->references('id')
                  ->on('armors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('characters');
    }
}
