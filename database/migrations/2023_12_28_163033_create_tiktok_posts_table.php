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
        Schema::create('tiktok_posts', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tiktok_id');
            $table->string('tiktok_post_id');
            $table->string('tiktok_post_caption');
            $table->longText("tiktok_post_thumbnail");

            $table->foreign('tiktok_id')->references('id')->on('tiktoks')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiktok_posts');
    }
};
