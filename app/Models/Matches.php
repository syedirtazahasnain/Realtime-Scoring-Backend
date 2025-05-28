<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Matches extends Model
{
     use HasFactory, SoftDeletes;

    protected $fillable = [
        'tournament_id', 'team1_id', 'team2_id', 'match_date', 'venue', 'status',
        'toss_winner_id', 'toss_decision', 'winner_id', 'team1_score', 'team1_wickets',
        'team1_overs', 'team2_score', 'team2_wickets', 'team2_overs', 'result',
        'man_of_the_match_id', 'summary'
    ];

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }

    public function team1()
    {
        return $this->belongsTo(Team::class, 'team1_id');
    }

    public function team2()
    {
        return $this->belongsTo(Team::class, 'team2_id');
    }

    public function tossWinner()
    {
        return $this->belongsTo(Team::class, 'toss_winner_id');
    }

    public function winner()
    {
        return $this->belongsTo(Team::class, 'winner_id');
    }

    public function manOfTheMatch()
    {
        return $this->belongsTo(User::class, 'man_of_the_match_id');
    }

    public function players()
    {
        return $this->hasMany(MatchPlayer::class);
    }

    public function innings()
    {
        return $this->hasMany(Inning::class);
    }

    public function firstInning()
    {
        return $this->hasOne(Inning::class)->where('innings_number', 1);
    }

    public function secondInning()
    {
        return $this->hasOne(Inning::class)->where('innings_number', 2);
    }
}
