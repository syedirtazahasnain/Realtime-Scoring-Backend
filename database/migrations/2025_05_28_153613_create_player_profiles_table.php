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
        Schema::create('player_profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->enum('playing_role',['batsman', 'bowler', 'all_rounder', 'wicket_keeper', 'fielder'])->nullable(); // batsman, bowler, all_rounder, wicket_keeper, fielder
            $table->string('batting_style')->nullable(); // right-handed, left-handed
            $table->string('bowling_style')->nullable(); // fast, medium, spin, etc.
            $table->string('fielding_position')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_profiles');
    }
};
