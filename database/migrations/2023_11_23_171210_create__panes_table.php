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
        Schema::create('panes', function (Blueprint $table) {
            $table->id();
            $table->string('Nombre', 150);
            $table->string('Descripcion', 255);
            $table->decimal('Precio', 8, 2);
            $table->integer('Cantidad');
            $table->string('img',500);
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('panes');
    }
};
