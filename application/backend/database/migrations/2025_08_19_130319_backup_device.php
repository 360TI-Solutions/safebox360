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
        Schema::table('backup_device', function (Blueprint $table) {
            $table->unsignedBigInteger('pop_location_id')->nullable()->after('ipaddr');

            $table->foreign('pop_location_id', 'backup_device_pop_location_fk')
                  ->references('id')->on('pop_location')
                  ->onUpdate('cascade')
                  ->onDelete('set null');

            $table->index('pop_location_id', 'backup_device_pop_location_idx');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('backup_device', function (Blueprint $table) {
            $table->dropForeign('backup_device_pop_location_fk');
            $table->dropIndex('backup_device_pop_location_idx');
            $table->dropColumn('pop_location_id');
        });
    }
};
