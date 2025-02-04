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
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('name_1', 20);
            $table->string('name_2', 20)->nullable();
            $table->string('surname_1', 20);
            $table->string('surname_2', 20)->nullable();
            $table->boolean('sex')->default(true);
            $table->boolean('nacionality')->default(true);
            $table->string('identity_number', 9)->unique();
            $table->foreignId('phone_area_codes_id')->constrained('phone_area_codes')->onDelete('cascade')->nullable();
            $table->string('phone_number', 7);
            $table->foreignId('cell_phone_area_codes_id')->constrained('cell_phone_area_codes')->onDelete('cascade')->nullable();
            $table->string('cellphone_number', 7);
            $table->foreignId('federals_state_id')->constrained('federals_state')->onDelete('cascade')->nullable();
            $table->foreignId('municipalities_id')->constrained('municipalities')->onDelete('cascade')->nullable();
            $table->foreignId('parishes_id')->constrained('parishes')->onDelete('cascade')->nullable();
            $table->foreignId('cities_id')->constrained('cities')->onDelete('cascade')->nullable();
            $table->string('address', 100)->nullable();
            $table->date('birth_date')->nullable();
            $table->foreignId('potition_id')->constrained('Potitions')->onDelete('cascade')->nullable();
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persons');
    }
};