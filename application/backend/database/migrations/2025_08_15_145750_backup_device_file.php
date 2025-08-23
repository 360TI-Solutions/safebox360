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
        Schema::create('backup_device_file', function (Blueprint $table) {
            $table->id('id')->primary();
            $table->foreignId('log');
            $table->foreign('log')
            ->references('id')->on('backup_device_log')
            ->onDelete('cascade');
            $table->bigInteger('size');
            $table->string('mime')->nullable();
            $table->string('extension')->nullable();
            $table->binary('content')->nullable();
            $table->timestampTz('created_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backup_device_file');
    }
};
