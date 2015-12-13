<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(){
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 45)->unique();
            $table->string('password', 45);
            $table->string('firstname', 100);
            $table->string('lastname', 100);
            $table->string('contact_no', 100)->nullable()->default(null);
            $table->tinyInteger('is_active')->default(0);
            $table->dateTime('deactivated')->nullable()->default(null);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(){
        Schema::drop('users');
    }
}
