<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('phone_area_codes', function (Blueprint $table) {
            $table->id();
            $table->string('code',50);
            $table->unsignedBigInteger('federals_state_id');
            $table->foreign('federals_state_id')->references('id')->on('federals_state')->onDelete('cascade');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('phone_area_codes');
    }
};
