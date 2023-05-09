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
        Schema::create('orders', function (Blueprint $table) {
            $table->bigIncrements('orderId');
            $table->string('pickUpLoc');
            $table->string('dropOffLoc');
            $table->date('pickUpDate');
            $table->date('dropOffDate');
            $table->time('pickUpTime');
            $table->unsignedBigInteger('carId');
            $table->unsignedBigInteger('userId');
            $table->unsignedBigInteger('adminId')->nullable();
            $table->timestamps();
        
            $table->foreign('carId')->references('carId')->on('cars');
            $table->foreign('userId')->references('userid')->on('users');
            $table->foreign('adminId')->references('adminId')->on('admins');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
