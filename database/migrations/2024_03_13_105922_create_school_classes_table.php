<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('school_classes', function (Blueprint $table) {
            $table->id();
            $table->integer('name');
            $table->integer('parallel');
            $table->foreignId('academic_year')->constrained()->cascadeOnDelete();
            $table->foreignId('school_id')->constrained()->cascadeOnDelete();
            $table->timestamps();
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('school_classes');
    }
};
