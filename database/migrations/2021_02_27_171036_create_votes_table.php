<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVotesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('votes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('election_id')->unsigned();
            $table->integer('candidate_id')->unsigned();
            $table->integer('pulling_centre_id')->unsigned();
            $table->integer('pulling_station_id')->unsigned();
            $table->integer('ward_id')->unsigned();
            $table->integer('constituency_id')->unsigned();
            $table->integer('section_id')->unsigned();
            $table->integer('chiefdom_id')->unsigned();
            $table->integer("district_id")->unsigned();
            $table->integer('region_id')->unsigned();
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
        Schema::dropIfExists('votes');
    }
}
