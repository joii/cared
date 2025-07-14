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
        Schema::create('branches', function (Blueprint $table) {
            $table->id();
            $table->string('name_en');
            $table->string('name_th');
            $table->string('sub_title_en')->nullable();
            $table->string('sub_title_th')->nullable();
            $table->string('address_en')->nullable();
            $table->string('address_th')->nullable();
            $table->string('room_type_en')->nullable();
            $table->string('room_type_th')->nullable();
            $table->string('facility_en')->nullable();
            $table->string('facility_th')->nullable();
            $table->string('nearby_en')->nullable();
            $table->string('nearby_th')->nullable();
            $table->string('price_range')->nullable();
            $table->string('image_url')->nullable();
            $table->longText('detail_en')->nullable();
            $table->longText('detail_th')->nullable();
            $table->string('area_en')->nullable();
            $table->string('area_th')->nullable();
            $table->string('pdf_en_path')->nullable();
            $table->string('pdf_th_path')->nullable();
            $table->string('line_url')->nullable();
            $table->string('facebook_url')->nullable();
            $table->string('gmap_url')->nullable();
            $table->string('pnone_no')->nullable();
            $table->string('call_center_no')->nullable();
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
