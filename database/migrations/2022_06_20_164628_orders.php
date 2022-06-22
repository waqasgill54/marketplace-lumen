<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('orders', function (Blueprint $table) {
            $table->id('id');
            $table->string('name');
            $table->float('max_bid_price');
            // $table->bigInteger('data_package_type_id')->unsigned();
            $table->bigInteger('data_package_type_id')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('data_package_type_id')->references('id')->on('data_package_types')->onDelete('SET NULL')->onUpdate('SET NULL');;
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('orders');
    }
};
