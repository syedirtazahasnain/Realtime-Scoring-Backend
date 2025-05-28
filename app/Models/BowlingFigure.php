<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class BowlingFigure extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'inning_id', 'player_id', 'overs', 'maidens', 'runs', 'wickets',
        'wides', 'no_balls', 'economy'
    ];

    public function inning()
    {
        return $this->belongsTo(Inning::class);
    }

    public function player()
    {
        return $this->belongsTo(User::class, 'player_id');
    }
}
