<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class TeamUser extends Pivot
{
    protected $table = 'team_user';

    protected $fillable = [
        'team_id', 'user_id', 'jersey_number', 'is_captain', 'is_vice_captain'
    ];

    public function team()
    {
        return $this->belongsTo(Team::class);
    }

    public function player()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
