<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateItemsTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('items', function(Blueprint $table){
            $table->increments('id');
            $table->string('ticket_no', 45);
            $table->integer('category_id')->nullable()->default(null);
            $table->integer('item_type_id')->nullable()->default(null);
            $table->string('description', 200);
            $table->decimal('price', 10, 0);
            $table->integer('auctiondate_id')->nullable()->default(null);
            $table->integer('images_id');
            $table->integer('branch_id')->unique();
            $table->tinyInteger('is_sold')->default(0);
            $table->dateTime('sold')->nullable()->default(null);
            $table->tinyInteger('is_cancelled')->default(0);
            $table->dateTime('cancelled')->nullable()->default(null);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('items');
    }
}
