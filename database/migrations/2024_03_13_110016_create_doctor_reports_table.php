<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('doctor_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->nullable()->constrained('users')->nullOnDelete();
            $table->double('weight');
            $table->double('height');
            $table->string('nutrition');
            $table->string('skin');
            $table->string('locomotor_system');
            $table->string('rib_cage');
            $table->string('vision');
            $table->string('hearing');
            $table->string('heart');
            $table->string('breathing');
            $table->string('abdomen_genitals');
            $table->string('cns');
            $table->string('psychic_development');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('doctor_reports');
    }
};
