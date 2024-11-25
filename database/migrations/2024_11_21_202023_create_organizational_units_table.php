<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('organizational_units', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignId('organizational_unit_types_id')->constrained();
            $table->foreignId('schedule_details_id')->constrained();
            $table->foreignId('doctors_id')->constrained();
            $table->foreignId('secretariats_id')->constrained();
            $table->string('description', 100)->nulleable();
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('organizational_units');
    }
};