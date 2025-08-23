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
        Schema::create('pop_location', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('name');                // Ex: "POP São Paulo"
            $table->text('comments')->nullable();

            // Localização administrativa
            $table->string('country', 100)->nullable();
            $table->string('state', 100)->nullable();     // estado / região
            $table->string('city', 100)->nullable();
            $table->text('address')->nullable();          // endereço completo (opcional)

            // Coordenadas
            // DECIMAL(10,7) suporta precisão sub-métrica.
            $table->decimal('latitude', 10, 7)->nullable();
            $table->decimal('longitude', 10, 7)->nullable();

            $table->timestamps();

            // Índices úteis para filtros
            $table->index(['country', 'state', 'city'], 'pop_locations_admin_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pop_location');
    }
};
