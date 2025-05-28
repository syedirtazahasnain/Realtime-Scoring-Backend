<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use phpDocumentor\Reflection\Types\Nullable;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('batting_scores', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('inning_id')->nullable();
            $table->unsignedBigInteger('player_id')->nullable();
            $table->integer('runs')->default(0);
            $table->integer('balls_faced')->default(0);
            $table->integer('fours')->default(0);
            $table->integer('sixes')->default(0);
            $table->float('strike_rate')->default(0);
            $table->string('how_out')->nullable(); // bowled, caught, run out, etc.
            $table->unsignedBigInteger('bowler_id')->nullable();
            $table->unsignedBigInteger('fielder_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('batting_scores');
    }
};
