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
        Schema::create('produdcts', function (Blueprint $table) {
            $table->id();
            $table->string('name', 50);
            $table->string('details', 200)->nullable();
            $table->string('sku', 50)->unique();
            $table->string('stock', 150)->default(0);
            $table->decimal('price', 8,2);
            $table->string('image', 100);
            $table->smallInteger('category_id');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produdcts');
    }
};
