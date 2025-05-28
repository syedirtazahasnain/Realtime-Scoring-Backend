<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class TournamentStanding extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'tournament_id', 'team_id', 'matches_played', 'matches_won',
        'matches_lost', 'matches_tied', 'matches_no_result', 'points',
        'net_run_rate', 'position'
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function team()
    {
        return $this->belongsTo(Team::class);
    }
}
