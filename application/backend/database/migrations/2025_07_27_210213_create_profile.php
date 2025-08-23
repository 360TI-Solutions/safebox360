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
        DB::table('profile')->insert([
            [
                'name' => 'Global Admin',
                'comments' => 'Global Administrator full rights',
                'readonly' => false,
                'canviewpasswords' => true,
                'canviewnumbers' => false,
                'created_at' => now(),
                'updated_at' => now(),
                'active' => true,
                'permissions' => '{}'
            ]
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
