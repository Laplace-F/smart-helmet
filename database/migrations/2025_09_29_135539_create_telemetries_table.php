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
    Schema::create('telemetries', function (Blueprint $table) {
        $table->id();
        $table->string('helmet_id');
        $table->double('latitude', 10, 6); // Angka untuk presisi GPS
        $table->double('longitude', 10, 6);
        $table->float('battery_level')->nullable(); // nullable artinya boleh kosong
        $table->timestamps(); // otomatis membuat kolom created_at dan updated_at
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('telemetries');
    }
};
