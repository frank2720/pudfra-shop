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
        Schema::create('product_entities', function (Blueprint $table) {
            $table->id();
            $table->integer('product_id');
            $table->integer('size_attribute_id');
            $table->integer('color_attribute_id');
            $table->string('sku');
            $table->decimal('price');
            $table->decimal('retail_price');
            $table->integer('quantity');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_entities');
    }
};
