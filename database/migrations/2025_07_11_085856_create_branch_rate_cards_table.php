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
        Schema::create('branch_rate_cards', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('branch_id');
            $table->unsignedInteger('program_id');
            $table->unsignedInteger('period_id');
            $table->double('dormitory_room_price')->default(0);
            $table->double('double_room_price')->default(0);
            $table->double('single_room_price')->default(0);
            $table->double('detached_house_price')->default(0);
            $table->string('status')->default('active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('branch_rate_cards');
    }
};
