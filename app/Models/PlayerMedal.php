<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlayerMedal extends Model
{
     use HasFactory, SoftDeletes;

    protected $fillable = [
        'player_id', 'medal_type_id', 'match_id', 'tournament_id', 'reason', 'awarded_on'
    ];

    public function player()
    {
        return $this->belongsTo(User::class, 'player_id');
    }

    public function medalType()
    {
        return $this->belongsTo(MedalType::class);
    }

    public function match()
    {
        return $this->belongsTo(Matches::class);
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
