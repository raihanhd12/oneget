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
        Schema::create('tab_details', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tabs_id');
            $table->nullableMorphs('socialmedia');
            $table->timestamps();

            $table->foreign('tabs_id')
                ->references('id')
                ->on('tabs')
                ->onDelete('cascade'); // This ensures that when the associated 'tabs' record is deleted, delete the corresponding 'tab_details' records.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tab_details');
    }
};
