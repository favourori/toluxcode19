<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname');
            $table->string('lastname');
            $table->string('username');
            $table->string('email', 100)->unique();
            $table->string('password');
            $table->integer('role_id')->unsigned()->default(1);
            $table->integer('subscription_id')->unsigned()->default(1);
            $table->timestamp('last_login')->nullable();
            $table->boolean('verified_seller')->default(false);
            $table->boolean('verified')->default(false);
            $table->string('store_url')->unique()->nullable();
            $table->string('store_name')->nullable();
            $table->text('store_description')->nullable();
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
