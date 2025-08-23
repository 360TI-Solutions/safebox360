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
        Schema::create('jwt_sessions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user')->cascadeOnDelete();
            $table->uuid('jti')->unique();
            $table->string('device_name')->nullable();    // p.ex. "Chrome/Linux"
            $table->string('ua_hash', 64)->nullable();    // hash do user agent
            $table->ipAddress('ip')->nullable();
            $table->unsignedInteger('token_version');     // versão no momento da emissão
            $table->timestampTz('issued_at');
            $table->timestampTz('expires_at')->nullable();  // se usar TTL
            $table->timestampTz('last_seen_at')->nullable();
            $table->timestampTz('revoked_at')->nullable();  // não-nulo = revogado
            $table->timestampsTz();

            $table->index(['user_id', 'revoked_at']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jwt_sessions');
    }
};
