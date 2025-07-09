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
        Schema::create('matches', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('tournament_id')->nullable();
            $table->unsignedBigInteger('team1_id')->nullable();
            $table->unsignedBigInteger('team2_id')->nullable();
            $table->dateTime('match_date')->nullable();
            $table->string('venue')->nullable();
            $table->enum('status',['upcoming', 'ongoing', 'completed', 'cancelled'])->nullable();
            $table->unsignedBigInteger('toss_winner_id')->nullable();
            $table->enum('toss_decision',['bat', 'field'])->nullable();
            $table->unsignedBigInteger('winner_id')->nullable();
            $table->integer('team1_score')->nullable();
            $table->integer('team1_wickets')->nullable();
            $table->float('team1_overs')->nullable();
            $table->integer('team2_score')->nullable();
            $table->integer('team2_wickets')->nullable();
            $table->float('team2_overs')->nullable();
            $table->string('result')->nullable();
            $table->unsignedBigInteger('man_of_the_match_id')->nullable();
            $table->text('summary')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('matches');
    }
};
