<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PlayerRanking extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'player_id', 'type', 'rank', 'points', 'tournament_id'
    ];

    public function player()
    {
        return $this->belongsTo(User::class, 'player_id');
    }

    public function tournament()
    {
        return $this->belongsTo(Tournament::class);
    }
}
