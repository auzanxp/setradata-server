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
        Schema::create('cars', function (Blueprint $table) {
            $table->bigIncrements('carId');
            $table->string('name');
            $table->string('carType');
            $table->float('rating');
            $table->string('fuel');
            $table->string('image');
            $table->float('hourRate');
            $table->float('dayRate');
            $table->float('monthRate');
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
        Schema::dropIfExists('cars');
    }
};
