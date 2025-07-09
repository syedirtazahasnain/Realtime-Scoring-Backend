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
        Schema::create('player_statistics', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('player_id');
            $table->integer('matches_played')->default(0);
            $table->integer('runs_scored')->default(0);
            $table->integer('wickets_taken')->default(0);
            $table->integer('catches')->default(0);
            $table->integer('stumpings')->default(0);
            $table->float('batting_average')->default(0);
            $table->float('bowling_average')->default(0);
            $table->float('strike_rate')->default(0);
            $table->float('economy_rate')->default(0);
            $table->integer('highest_score')->default(0);
            $table->integer('best_bowling_figures_wickets')->default(0);
            $table->integer('best_bowling_figures_runs')->default(0);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_statistics');
    }
};
