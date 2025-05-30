<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Inning extends Model
{
     use HasFactory, SoftDeletes;

    protected $fillable = [
        'match_id', 'batting_team_id', 'bowling_team_id', 'innings_number',
        'total_runs', 'wickets', 'overs', 'extras'
    ];

    public function match()
    {
        return $this->belongsTo(Matches::class, 'match_id');
    }

    public function battingTeam()
    {
        return $this->belongsTo(Team::class, 'batting_team_id');
    }

    public function bowlingTeam()
    {
        return $this->belongsTo(Team::class, 'bowling_team_id');
    }

    public function battingScores()
    {
        return $this->hasMany(BattingScore::class);
    }

    public function bowlingFigures()
    {
        return $this->hasMany(BowlingFigure::class);
    }
}
