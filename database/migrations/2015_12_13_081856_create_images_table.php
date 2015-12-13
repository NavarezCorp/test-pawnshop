<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagesTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('images', function(Blueprint $table){
            $table->increments('id');
            $table->string('image1', 200);
            $table->string('image2', 200)->nullable()->default(null);
            $table->string('image3', 200)->nullable()->default(null);
            $table->string('image4', 200)->nullable()->default(null);
            $table->string('image5', 200)->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('images');
    }
}
