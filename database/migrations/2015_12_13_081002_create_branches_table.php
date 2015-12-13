<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBranchesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('branches', function(Blueprint $table){
            $table->increments('id');
            $table->integer('pawnshop_id')->unique();
            $table->string('name', 45);
            $table->integer('province_id')->unique();
            $table->integer('city_id')->unique();
            $table->string('street', 200);
            $table->string('contact_no', 100);
            $table->integer('user_id')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('branches');
    }
}
