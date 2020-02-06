<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePackagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('packages', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('hotel_id');
            $table->string('image')->nullable();
            $table->string('name');
            $table->integer('price');
            $table->json('items');
            $table->enum('type',array('indoor','outdoor'))->default('indoor');

            $table->foreign('hotel_id')->references('id')
                    ->on('hotels')->onDelete('cascade');
                    
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
        Schema::dropIfExists('packages');
    }
}
