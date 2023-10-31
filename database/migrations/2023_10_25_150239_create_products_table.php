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
            $table->string('name');
            $table->longText('description')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->boolean('visibility_in_google')->default(true);
            $table->boolean('visibility_on_website')->default(true);
            $table->unsignedInteger('order');
            $table->unsignedInteger('view');
            $table->unsignedInteger('busket');
            $table->unsignedInteger('sell');
            $table->string('photo');
            $table->string('attr');
            $table->decimal('price', 10, 2);
            $table->decimal('price_promo', 10, 2)->nullable();
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
