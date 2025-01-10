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
        Schema::create('hasil_analisis_facebooks', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger("facebook_id")->nullable();
            $table->bigInteger("followers");
            $table->bigInteger("posts");
            $table->bigInteger("likes");
            $table->bigInteger("shares");
            $table->bigInteger("comments");

            $table->foreign('facebook_id')->references('id')->on('facebooks');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hasil_analisis_facebooks');
    }
};
