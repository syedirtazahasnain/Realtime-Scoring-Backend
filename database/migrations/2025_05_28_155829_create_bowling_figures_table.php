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
        Schema::create('bowling_figures', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inning_id')->nullable();
            $table->unsignedBigInteger('player_id')->nullable();
            $table->float('overs')->default(0);
            $table->integer('maidens')->default(0);
            $table->integer('runs')->default(0);
            $table->integer('wickets')->default(0);
            $table->integer('wides')->default(0);
            $table->integer('no_balls')->default(0);
            $table->float('economy')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bowling_figures');
    }
};
