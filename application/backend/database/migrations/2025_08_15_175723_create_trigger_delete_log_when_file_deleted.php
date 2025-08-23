<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        DB::unprepared('
            CREATE OR REPLACE FUNCTION delete_log_when_file_deleted()
            RETURNS TRIGGER AS $$
            BEGIN
                DELETE FROM backup_device_log WHERE id = OLD.log;
                RETURN OLD;
            END;
            $$ LANGUAGE plpgsql;

            CREATE TRIGGER trg_delete_log_when_file_deleted
            AFTER DELETE ON backup_device_file
            FOR EACH ROW
            EXECUTE FUNCTION delete_log_when_file_deleted();
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('
            DROP TRIGGER IF EXISTS trg_delete_log_when_file_deleted ON backup_device_file;
            DROP FUNCTION IF EXISTS delete_log_when_file_deleted();
        ');
    }
};
