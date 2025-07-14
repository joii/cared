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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('section_id');
            $table->string('title1_en')->nullable();
            $table->string('title1_th')->nullable();
            $table->string('title2_en')->nullable();
            $table->string('title2_th')->nullable();
            $table->string('title3_en')->nullable();
            $table->string('title3_th')->nullable();
            $table->string('title4_en')->nullable();
            $table->string('title4_th')->nullable();
            $table->string('alt_text')->nullable();
            $table->string('image_path');
            $table->string('link_url')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
