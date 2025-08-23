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

        Schema::create('profile', function (Blueprint $table) {
            $table->id()->primary();;
            $table->string('name')->unique()->nullable();
            $table->text('comments')->nullable();
            $table->boolean('readonly')->default(false);
            $table->boolean('canviewpasswords')->default(false);
            $table->boolean('canviewnumbers')->default(false);
            $table->timestampTz('created_at')->nullable();
            $table->timestampTz('updated_at')->nullable();
            $table->timestampTz('deleted_at')->nullable();
            $table->boolean('active')->default(true);
            $table->jsonb('permissions')->nullable();
        });

        Schema::create('user', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('name');
            $table->string('username',20)->unique()->nullable(false);
            $table->string('email')->unique();
            $table->timestampTz('verified_at')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('telegram')->nullable();
            $table->string('slack')->nullable();
            $table->boolean('receiveemail')->default(false);
            $table->boolean('receivewhatsapp')->default(false);
            $table->boolean('receivetelegram')->default(false);
            $table->boolean('receiveslack')->default(false);
            $table->string('password');
            $table->rememberToken();
            $table->unsignedBigInteger('profile')->nullable();
            $table->boolean('compactsidebar')->default(false);
            $table->boolean('auth2fa')->default(false);
            $table->string('auth2facode')->nullable();
            $table->timestampTz('auth2faexpires')->nullable();
            $table->text('base64picture')->nullable();
            $table->string('mimepicture', 50)->nullable();
            $table->string('language',10)->default('en');
            $table->unsignedInteger('token_version')->default(1);
            $table->timestampTz('password_changed_at')->nullable();
            $table->string('timezone')->default('UTC');
            $table->boolean('active')->default(false);
            $table->timestampTz('created_at')->nullable();
            $table->timestampTz('updated_at')->nullable();
            $table->timestampTz('deleted_at')->nullable();
            $table->foreign('profile')->references('id')->on('profile')->onDelete('cascade');
        });

        Schema::create('session', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->text('payload');
            $table->integer('last_activity');
            $table->timestampTz('login_time')->nullable();
            $table->foreign('user_id')->references('id')->on('user')->onDelete('cascade');
        });

        Schema::create('session_jwt', function (Blueprint $table) {
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

        Schema::create('audit', function (Blueprint $table) {
            $table->id();
            $table->string('model')->nullable();
            $table->string('operation')->nullable();
            $table->json('old')->nullable();
            $table->json('new')->nullable();
            $table->foreignId('user')->nullable();
            $table->timestampTz('created_at')->nullable();
            $table->timestampTz('updated_at')->nullable();
            $table->foreign('user')->references('id')->on('user');
        });

        Schema::create('config', function (Blueprint $table) {
            $table->id()->primary();
            $table->string('directive', 40)->unique();
            $table->string('value')->nullable();
        });

        Schema::create('password_reset', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestampTz('created_at')->nullable();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('password_reset');
        Schema::dropIfExists('config');
        Schema::dropIfExists('audit');
        Schema::dropIfExists('profile');
        Schema::dropIfExists('user');
        Schema::dropIfExists('session');
        Schema::dropIfExists('session_jwt');
    }
};
