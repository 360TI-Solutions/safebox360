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
        $permissions = [
            "backup.schedules",
            "backup.schedules.save",
            "backup.schedules.delete",
            "backup.devices",
            "backup.devices.run",
            "backup.devices.deleteerrors",
            "backup.devices.deletefiles",
            "backup.devices.save",
            "backup.devices.delete",
            "backup.devices.download",
            "backup.storage",
            "settings.settings",
            "settings.profiles",
            "settings.profiles.save",
            "settings.accounts",
            "settings.accounts.save",
            "settings.accounts.delete",
            "settings.profiles.delete",
            "settings.tags",
            "settings.tags.save",
            "settings.tags.delete",
            "settings.pops",
            "settings.pops.save",
            "settings.pops.delete",
            "settings.license",
            "settings.license.activaterenew",
            "settings.license.delete"
        ];

        DB::table('profile')
            ->where('id', '1')
            ->update([
                'permissions' => json_encode($permissions)
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
