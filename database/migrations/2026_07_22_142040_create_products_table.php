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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('description')->nullable();;
            $table->string('summary')->nullable();;
            $table->string('brand_id')->nullable();;
            $table->string('is_active')->nullable();;
            $table->string('show_in_home')->nullable();;
            $table->string('featured')->nullable();;
            $table->string('slug')->nullable();;
            $table->string('stock')->nullable();;
            $table->string('price')->nullable();;
            $table->string('discunt')->nullable();;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
