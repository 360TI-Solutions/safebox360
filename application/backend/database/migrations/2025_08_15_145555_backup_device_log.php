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
        Schema::create('backup_device_log', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->foreignId('device');
            $table->foreign('device')
            ->references('id')->on('backup_device')
            ->onDelete('cascade');
            $table->text('log')->nullable();
            $table->integer('status_code')->default('0');
            $table->string('status_msg')->nullable();
            $table->timestampTz('created_at');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backup_device_log');
    }
};
