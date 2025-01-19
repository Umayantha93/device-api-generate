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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('device_id')->unique();
            $table->enum('device_type', ['unset', 'free', 'leasing', 'restricted'])->default('unset');
            $table->foreignId('activation_code_id')->nullable()->constrained('activation_codes')->cascadeOnDelete();
            $table->foreignId('device_owner_id')->nullable()->constrained('device_owners')->cascadeOnDelete();
            $table->string('device_api_key')->nullable()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
