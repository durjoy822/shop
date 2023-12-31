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
            $table->integer('category_id');
            $table->integer('sub_category_id');
            $table->integer('brand_id');
            $table->integer('unit_id');
            $table->string('name');
            $table->string('code');
            $table->text('short_description')->nullable();
            $table->longText('long_description');
            $table->integer('regular_price');
            $table->integer('selling_price');
            $table->integer('discount')->nullable();
            $table->integer('stock_amount');
            $table->string('image')->nullable();
            $table->string('status')->accepts('Public','Privet');
            $table->string('hit_count')->nullable();
            $table->string('sales_count')->nullable();
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