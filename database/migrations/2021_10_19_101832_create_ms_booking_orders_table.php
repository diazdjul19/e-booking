<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMsBookingOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ms_booking_orders', function (Blueprint $table) {
            $table->id();
            $table->string('rendome_booking_order');
            $table->string('name_menu_order')->nullable();
            $table->string('name_qty_order')->nullable();
            $table->float('price_order')->nullable();

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
        Schema::dropIfExists('ms_booking_orders');
    }
}
