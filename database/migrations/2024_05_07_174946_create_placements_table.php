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
        Schema::create('placements', function (Blueprint $table) {
            $table->id();
            $table->string('index')->unique();
            $table->string('name');
            $table->string('gender_id');
            $table->string('aggregate');
            $table->string('programme_id');
            $table->string('track')->nullable();
            $table->string('status_id');
            $table->string('contact')->nullable();
            $table->boolean('enroll')->default(false);
            $table->boolean('protocol')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('placements');
    }
};
