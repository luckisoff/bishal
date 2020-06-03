<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateAllOrdersTable6 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('all_orders', function (Blueprint $table) {
            $table->integer('lang')->nullable();
            $table->integer('lat')->nullable();
            $table->timestamp('pickup_time')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('all_orders', function (Blueprint $table) {
            $table->dropIfExists('lang');
            $table->dropIfExists('lat');
            $table->dropIfExists('pickup_time');
        });
    }
}
