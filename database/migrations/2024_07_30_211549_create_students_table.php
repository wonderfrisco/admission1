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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('index')->unique();
            $table->string('dob');
            $table->string('pob');
            $table->string('town');
            $table->string('bschool');
            $table->string('folder');
            $table->string('nationality');
            $table->integer('region_id');
            $table->integer('district_id');
            $table->string('raddress');
            $table->string('religion_id');
            $table->string('photo');
            $table->string('medication')->nullable();
            $table->string('code');
            $table->string('raw');
            $table->string('allergy')->nullable();
            $table->integer('disability_id');
            $table->integer('house_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
