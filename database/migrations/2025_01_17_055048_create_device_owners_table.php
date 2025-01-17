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
        Schema::create('device_owners', function (Blueprint $table) {
            $table->id();
            $table->string('billing_name');
            $table->string('address_country');
            $table->string('address_zip');
            $table->string('address_city');
            $table->string('address_street');
            $table->string('vat_number')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('device_owners');
    }
};
