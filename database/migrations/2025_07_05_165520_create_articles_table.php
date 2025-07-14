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
        Schema::create('articles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('title_en');
            $table->string('title_th');
            $table->text('description_en');
            $table->text('description_th');
            $table->text('detail_en')->nullable();
            $table->text('detail_th')->nullable();
            $table->string('author_en')->nullable();
            $table->string('author_th')->nullable();
            $table->string('image_path');
            $table->string('thumbnail_path');
            $table->dateTime('published_at');
            $table->string('external_url')->nullable();
            $table->string('slug_en');
            $table->string('slug_th');
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->string('canonical_url')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articles');
    }
};
