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
        Schema::create('backup_device_tag', function (Blueprint $table) {
            $table->foreignId('backup_device_id')
                  ->constrained('backup_device')
                  ->onDelete('cascade');

            $table->foreignId('tag_id')
                  ->constrained('tag')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backup_devices_tag');
    }
};
