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
        Schema::table('cascade', function (Blueprint $table) {
            
            Schema::table('audit', function (Blueprint $table) {
                // PostgreSQL exige DROP CONSTRAINT por SQL se não sabemos o nome exato
                DB::statement('ALTER TABLE audit DROP CONSTRAINT IF EXISTS audit_user_foreign');
            });
    
            // Em seguida, adicionamos a nova constraint com ON DELETE CASCADE
            Schema::table('audit', function (Blueprint $table) {
                $table->foreign('user')
                    ->references('id')->on('user')
                    ->onDelete('cascade');
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('cascade', function (Blueprint $table) {
            //
        });
    }
};
