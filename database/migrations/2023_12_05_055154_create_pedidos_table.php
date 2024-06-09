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
        Schema::create('panes_pedidos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pedido');
            $table->unsignedBigInteger('id_pan');
            $table->integer('Cantidad');
            $table->decimal('TotalPrecio', 8, 2);
            $table->foreign('id_pedido')->references('id')->on('pedidos');
            $table->foreign('id_pan')->references('id')->on('panes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panes_pedidos');
    }
};
