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
        Schema::create('productos', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 10, 2); // Precio con 10 dígitos en total y 2 decimales

            $table->unsignedBigInteger('marcas_id');
            $table->foreign('marcas_id')->references('id')->on('marcas');

            //$table->foreignId('marcas_id')->constrained()->onDelete('cascade'); // Relación con marcas
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productos');
    }
};
