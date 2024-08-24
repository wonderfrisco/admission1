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
        Schema::create('parrents', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('town');
            $table->string('number');
            $table->string('index');
            $table->string('type');
            $table->string('address');
            $table->integer('occupation_id');
            $table->integer('relation_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parrents');
    }
};
