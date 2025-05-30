<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tournament extends Model
{
     use HasFactory, SoftDeletes;

    protected $fillable = [
        'name', 'description', 'start_date', 'end_date', 'location', 'format'
    ];

    protected $casts = [
        'start_date' => 'datetime',
        'end_date' => 'datetime',
    ];

    public function matches()
    {
        return $this->hasMany(Matches::class);
    }

    public function standings()
    {
        return $this->hasMany(TournamentStanding::class);
    }

    public function medals()
    {
        return $this->hasMany(PlayerMedal::class);
    }
}
