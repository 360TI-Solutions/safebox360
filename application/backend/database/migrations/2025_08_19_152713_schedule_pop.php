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
        Schema::create('backup_schedule_pop', function (Blueprint $table) {
            $table->foreignId('backup_schedule_id')
                ->constrained('backup_schedule') // define a tabela explicitamente
                ->onDelete('cascade');
  
            $table->foreignId('pop_location_id')
                ->constrained('pop_location') // também necessário se a tabela for 'tag' e não 'tags'
                ->onDelete('cascade');

            $table->primary(['backup_schedule_id', 'pop_location_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backup_schedule_pop');
    }
};
