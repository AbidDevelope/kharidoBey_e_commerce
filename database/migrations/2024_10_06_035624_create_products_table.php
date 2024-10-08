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
            
            $table->foreignId('category_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('sub_category_id')->nullable()->constrained()->onDelete('cascade');
            $table->foreignId('brand_id')->constrained()->onDelete('cascade');
            
            $table->string('title');
            $table->string('slug');
            $table->string('short_description')->nullable();
            $table->text('long_description')->nullable();
            
            $table->float('discount', 10, 2)->nullable();
            $table->decimal('selling_price', 10, 2);
            $table->decimal('old_price', 10, 2)->nullable();
            $table->decimal('compare_price', 10, 2)->nullable();
            
            $table->enum('is_featured', ['Yes', 'No'])->default('No');
            $table->string('sku');
            $table->string('barcode')->nullable();
            $table->enum('track_qty', ['Yes', 'No'])->default('No');
            $table->integer('qty')->nullable();
            
            $table->integer('stock')->default(1);
            $table->integer('status')->default(1);
            
            $table->softDeletes();
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