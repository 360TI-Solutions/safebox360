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
        Schema::create('country', function (Blueprint $table) {
                $table->id();
                $table->string('name');                   // Ex: Brasil
                $table->string('code', 2)->unique();      // ISO 3166-1 alpha-2 (Ex: BR)
                $table->string('full_code', 5)->nullable(); // ISO3166-2-lvl4 (Ex: BR-RS)
                $table->string('region')->nullable();     // Ex: América do Sul
                $table->string('subregion')->nullable();  // Ex: América Latina
                $table->string('latitude', 30)->nullable();  // Centro do país
                $table->string('longitude', 30)->nullable();
                $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('country');
    }
};
