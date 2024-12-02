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
        Schema::create('trees', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->text('name');
        });

        Schema::table('ornaments', function (Blueprint $table) {
            $table->foreignId('tree_id')->references('id')->on('trees');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('ornaments', function (Blueprint $table) {
            $table->dropColumn('tree_id');
        });
        Schema::dropIfExists('trees');
    }
};
