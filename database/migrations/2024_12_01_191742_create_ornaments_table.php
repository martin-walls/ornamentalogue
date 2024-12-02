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
        Schema::create('ornaments', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->text('occasion');
            $table->date('date');
            $table->text('story');
        });

        Schema::create('images', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->text('path');
            $table->foreignId('ornament_id')->references('id')->on('ornaments');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('images');
        Schema::dropIfExists('ornaments');
    }
};
