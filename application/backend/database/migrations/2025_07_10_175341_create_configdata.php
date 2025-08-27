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
        DB::table('config')->insert([

            ['directive' => 'backup_errorlogs_purge_days', 'value' => '90'],
            ['directive' => 'backup_retention_max', 'value' => '180'],

            ['directive' => 'pw_min', 'value' => '6'],
            ['directive' => 'pw_max', 'value' => '20'],
            ['directive' => 'pw_lower', 'value' => true],
            ['directive' => 'pw_upper', 'value' => false],
            ['directive' => 'pw_numbers', 'value' => true],
            ['directive' => 'pw_symbols', 'value' => false],

            ['directive' => 'lang_frontend', 'value' => 'en'],
            ['directive' => 'lang_backend', 'value' => 'en'],
            ['directive' => 'lang_timezone', 'value' => 'UTC'],

            ['directive' => 'smtp_hostname', 'value' => 'mail.example.com'],
            ['directive' => 'smtp_port', 'value' => '587'],
            ['directive' => 'smtp_authtype', 'value' => 'tls'],
            ['directive' => 'smtp_password', 'value' => 'yourpassword'],
            ['directive' => 'smtp_username', 'value' => 'your@email.com'],
            ['directive' => 'smtp_sender_email', 'value' => 'your@email.com'],
            ['directive' => 'smtp_sender_name', 'value' => 'SAFEBOX 360'],

            ['directive' => 'update_checksum', 'value' => '0'],
            ['directive' => 'version', 'value' => '1.0'],
            ['directive' => 'release', 'value' => '1'],
            ['directive' => 'lastupdate', 'value' => '']
            
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        
    }
};
