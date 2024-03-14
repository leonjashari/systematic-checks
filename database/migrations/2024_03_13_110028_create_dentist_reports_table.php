<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('dentist_reports', function (Blueprint $table) {
            $table->id();
            $table->foreignId('doctor_id')->nullable()->constrained('users')->nullOnDelete();
            $table->string('oral_hygiene');
            $table->boolean('toothbrush');
            $table->boolean('toothpaste');
            $table->json('primary_tooth');
            $table->boolean('ortodontic_anomalies');
            $table->json('permanently_tooth');
            $table->string('ohi');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('dentist_reports');
    }
};
