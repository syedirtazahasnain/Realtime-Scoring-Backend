<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlayerStatistics extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'player_id', 'matches_played', 'runs_scored', 'wickets_taken', 'catches',
        'stumpings', 'batting_average', 'bowling_average', 'strike_rate',
        'economy_rate', 'highest_score', 'best_bowling_figures_wickets',
        'best_bowling_figures_runs'
    ];

    public function player()
    {
        return $this->belongsTo(User::class, 'player_id');
    }
}
