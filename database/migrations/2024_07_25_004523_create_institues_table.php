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
        Schema::create('institues', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('name');
            $table->string('address');
            $table->string('phone1');
            $table->string('phone2');
            $table->string('email');
            $table->string('website');
            $table->string('logo');
            $table->string('description');
            $table->foreignUuid('category_id')->references('id')->on('categories');
            $table->foreignUuid('city_id')->references('id')->on('cities');
            // $table->foreignId('category_id')->constrained()->onDelete('cascade');
            // $table->foreignId('city_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institues');
    }
};
