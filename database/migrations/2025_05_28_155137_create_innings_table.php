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
        Schema::create('innings', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('match_id')->nullable();
            $table->unsignedBigInteger('batting_team_id')->nullable();
            $table->unsignedBigInteger('bowling_team_id')->nullable();
            $table->enum('innings_number',['1','2'])->nullable();
            $table->integer('total_runs')->default(0);
            $table->integer('wickets')->default(0);
            $table->float('overs')->default(0);
            $table->text('extras')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('innings');
    }
};
