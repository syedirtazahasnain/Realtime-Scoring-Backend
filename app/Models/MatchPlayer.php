<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class MatchPlayer extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'match_id', 'team_id', 'player_id', 'is_playing', 'position'
    ];

    public function match()
    {
        return $this->belongsTo(Matches::class,'match_id');
    }

    public function team()
    {
        return $this->belongsTo(Team::class,'team_id');
    }

    public function player()
    {
        return $this->belongsTo(User::class, 'player_id');
    }
}
