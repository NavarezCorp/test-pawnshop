<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAuctiondatesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('auctiondates', function(Blueprint $table){
            $table->increments('id');
            $table->integer('branch_id')->unique()->unsigned();
            $table->dateTime('auction');
            $table->timestamps();
        });
        /*
        Schema::table('auctiondates', function($table){
            $table->foreign('branch_id')->references('id')->on('branches');
        });
        */
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('auctiondates');
    }
}
