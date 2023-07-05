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
        Schema::create('hotel_recomendations', function (Blueprint $table) {
            $table->id();
            $table->UnsignedBiginteger('hotel_detail_id');
            $table->UnsignedBiginteger('hotel_gallery_id');
            $table->UnsignedBiginteger('hotel_multiple_price_id');
            $table->UnsignedBiginteger('hotel_location_id');
            $table->string('name');
            $table->string('image');
            $table->string('slug');
            $table->SoftDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotel_recomendations');
    }
};
