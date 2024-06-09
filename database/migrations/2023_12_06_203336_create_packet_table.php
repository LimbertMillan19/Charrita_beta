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
        Schema::create('PedidoEvento', function (Blueprint $table) {
            $table->id();
            $table->string('Folio');
            $table->unsignedBigInteger('id_user');
            $table->string('Evento');
            $table->date('Fecha');
            $table->date('Fecha_Entrega');
            $table->string('Direccion');
            $table->decimal('Costo');
            $table->integer('TotalPanes');
            $table->string('Estado');
            $table->foreign('id_user')->references('id')->on('users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('PedidoEvento');
    }
};
