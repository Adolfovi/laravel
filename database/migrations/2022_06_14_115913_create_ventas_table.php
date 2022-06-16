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
        Schema::create('ventas', function (Blueprint $table) {
            $table->id();
            $table->integer('ticket_number');
            $table->string('date_emision');
            $table->string('time_emision');
            $table->decimal('payment_method_id');
            $table->decimal('total_base_price');
            $table->decimal('total_tax_price');
            $table->decimal('total_price');
            $table->decimal('client_id');
            $table->decimal('active');
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
        Schema::dropIfExists('ventas');
    }
};
