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
        Schema::create('backup_device', function (Blueprint $table) {
            $table->id();
            $table->foreignId('script');
            $table->foreign('script')
                  ->references('id')->on('backup_script')
                  ->onDelete('cascade');
            $table->string('name');
            $table->text('comments')->nullable();
            $table->json('args')->nullable();
            $table->integer('lastbackup_code')->nullable();
            $table->string('lastbackup_msg')->nullable();
            $table->timestampTz('lastbackup_at')->nullable();
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
        Schema::dropIfExists('backup_devices');
    }
};
