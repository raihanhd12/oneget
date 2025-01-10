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
        Schema::create('analytic_briefs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('hasil_laporan_id');
            $table->string('status')->default('NOT NEEDED');
            $table->string('feedback')->nullable();
            $table->timestamps();

            $table->foreign('hasil_laporan_id')->references('id')->on('hasil_laporan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analytic_briefs');
    }
};
