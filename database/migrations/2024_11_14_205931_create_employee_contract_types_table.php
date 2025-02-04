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
        Schema::create('employee_contract_types', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200);
            $table->string('description', 200);
            $table->foreignId('headquarter_id')->constrained('headquarters')->onDelete('cascade'); // Relación con especialidades
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employee_contract_types');
    }
};
