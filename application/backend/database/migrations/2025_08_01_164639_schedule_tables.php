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
        
        Schema::create('backup_schedule', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->json('days_of_week'); // exemplo: ["monday", "wednesday", "friday"]
            $table->time('execution_time'); // horário fixo em HH:MM:SS
            $table->timestampsTz();
        });


    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backup_schedule');
    }
};
