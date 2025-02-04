<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('Potitions', function (Blueprint $table) {
            $table->id();
            $table->string('name', 200); // Nombre del cargo (ej. secretaria, paciente, doctor)
            $table->string('description', 200);
            $table->boolean('active')->default(true);
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('Potitions');
    }
};
