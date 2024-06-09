<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('packet_panes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_packet');
            $table->unsignedBigInteger('id_pan');
            $table->integer('Cantidad');
            $table->integer('Total');
            $table->foreign('id_packet')->references('id')->on('PedidoEvento');
            $table->foreign('id_pan')->references('id')->on('panes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('packet_panes');
    }
};
