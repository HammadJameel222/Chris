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
        // Schema::create('category_and_products', function (Blueprint $table) {
        //     $table->id();
        //     $table->foreignId('category_id');
        //     $table->foreignId('product_id');
        //     $table->timestamps();
        // });

        Schema::dropIfExists('category_and_products');
    }

    /**
     * Reverse the migrations.
     */
    // public function down(): void
    // {
    //     Schema::dropIfExists('category_and_products');
    // }
};
