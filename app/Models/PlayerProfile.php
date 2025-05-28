<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class PlayerProfile extends Model
{
     use HasFactory ,SoftDeletes;

    protected $fillable = [
        'user_id', 'playing_role', 'batting_style', 'bowling_style', 'fielding_position'
    ];

    public function player()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
