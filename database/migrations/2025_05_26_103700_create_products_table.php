<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id(); // Auto-incrementing primary key
            $table->string('name'); // Product name (e.g., "Intel Core i9")
            $table->text('description')->nullable(); // Product description
            $table->decimal('price', 8, 2); // Price (e.g., 499.99)
            $table->string('category'); // Category (e.g., CPU, GPU, RAM)
            $table->integer('stock')->default(0); // Stock quantity
            $table->timestamps(); // Created_at and updated_at
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};