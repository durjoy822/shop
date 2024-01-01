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
        Schema::create('spacial_products', function (Blueprint $table) {
            $table->id();
            $table->string('offer_name')->nullable();
            $table->string('product_id');
            $table->string('selling_price');
            $table->string('starting_time');
            $table->string('ending_time');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('spacial_products');
    }
};