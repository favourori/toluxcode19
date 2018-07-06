<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSellerApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seller_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->string('store_url', 100)->unique();
            $table->string('store_name');
            $table->integer('user_id')->unsigned();
            $table->string('passport', 100)->unique()->nullable();
            $table->string('business_docs')->nullable();
            $table->string('store_description')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('seller_applications');
    }
}
