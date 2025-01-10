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
        Schema::create('hasil_analisis_post_tiktoks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("tiktok_post_id")->nullable();
            $table->bigInteger("tiktok_post_like_count");
            $table->bigInteger("tiktok_post_share_count");
            $table->bigInteger("tiktok_post_comment_count");
            $table->bigInteger("tiktok_post_play_count");

            $table->foreign('tiktok_post_id')->references('id')->on('tiktok_posts');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_analisis_post_tiktoks');
    }
};
