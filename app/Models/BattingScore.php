<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BattingScore extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'inning_id',
        'player_id',
        'runs',
        'balls_faced',
        'fours',
        'sixes',
        'strike_rate',
        'how_out',
        'bowler_id',
        'fielder_id'
    ];

    public function inning()
    {
        return $this->belongsTo(Inning::class);
    }

    public function player()
    {
        return $this->belongsTo(User::class, 'player_id');
    }

    public function bowler()
    {
        return $this->belongsTo(User::class, 'bowler_id');
    }

    public function fielder()
    {
        return $this->belongsTo(User::class, 'fielder_id');
    }
}
