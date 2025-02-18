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
        Schema::table('products', function (Blueprint $table) {
            $table->string('image1_path')->nullable(); // Putanja prve slike
            $table->string('image2_path')->nullable(); // Putanja druge slike
            $table->string('image3_path')->nullable(); // Putanja treće slike
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            $table->dropColumn(['image1_path', 'image2_path', 'image3_path']);
        });
    }
};
