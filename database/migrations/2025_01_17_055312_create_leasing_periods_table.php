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
        Schema::create('leasing_periods', function (Blueprint $table) {
            $table->id();
            $table->foreignId('device_id')->constrained('devices')->cascadeOnDelete();
            $table->foreignId('leasing_plan_id')->constrained('leasing_plans')->cascadeOnDelete();
            $table->integer('leasing_construction_id')->nullable();
            $table->integer('leasing_construction_maximum_training')->nullable();
            $table->date('leasing_construction_maximum_date')->nullable();
            $table->date('start_date')->nullable();
            $table->timestamp('next_check')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leasing_periods');
    }
};
