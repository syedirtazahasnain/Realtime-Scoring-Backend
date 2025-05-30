<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Team extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'short_name',
        'logo',
        'description',
        'owner_id',
        'group_id'
    ];

    public function owner()
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function group()
    {
        return $this->belongsTo(Group::class, 'group_id');
    }

    public function players()
    {
        return $this->belongsToMany(User::class)
            ->using(TeamUser::class)
            ->withPivot('jersey_number', 'is_captain', 'is_vice_captain');
    }

    public function matchesAsTeam1()
    {
        return $this->hasMany(Matches::class, 'team1_id');
    }

    public function matchesAsTeam2()
    {
        return $this->hasMany(Matches::class, 'team2_id');
    }

    public function wonMatches()
    {
        return $this->hasMany(Matches::class, 'winner_id');
    }

    public function tossWonMatches()
    {
        return $this->hasMany(Matches::class, 'toss_winner_id');
    }

    public function standings()
    {
        return $this->hasMany(TournamentStanding::class);
    }

    public function captain()
    {
        return $this->players()->wherePivot('is_captain', true)->first();
    }

    public function viceCaptain()
    {
        return $this->players()->wherePivot('is_vice_captain', true)->first();
    }
}
