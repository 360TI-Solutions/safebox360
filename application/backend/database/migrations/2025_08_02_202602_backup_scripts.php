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
        Schema::create('backup_script', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vendor');
            $table->foreign('vendor')
                  ->references('id')->on('backup_vendor')
                  ->onDelete('cascade');
            $table->string('model');
            $table->string('name');
            $table->string('description')->nullable();
            $table->text('comments')->nullable();
            $table->string('extension',20)->default('txt');
            $table->string('queue',20)->default('default');
            $table->json('args')->nullable();
            $table->binary('compiled')->nullable();
            $table->string('checksum',32)->nullable();
            $table->boolean('active')->default(true);
            $table->timestampTz('created_at')->nullable();
            $table->timestampTz('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('backup_scripts');
    }
};
