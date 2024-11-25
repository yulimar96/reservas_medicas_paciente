<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('doctors', function (Blueprint $table) {
            $table->id();
            $table->string('medical_license')->unique();
            $table->foreignId('person_id')->constrained('persons')->onDelete('cascade'); // Relación con persons
            $table->foreignId('specialtys_id')->constrained('medical_specialities')->onDelete('cascade'); // Relación con especialidades
            $table->foreignId('employee_contract_types_id')->constrained('employee_contract_types')->onDelete('cascade')->nullable();
            $table->foreignId('potition_id')->constrained('Potitions')->onDelete('cascade')->nullable();
            $table->foreignId('organizational_unit_types_id')->constrained('organizational_unit_types')->onDelete('cascade')->nullable(); // Relación con persons

            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('doctors');
    }
};