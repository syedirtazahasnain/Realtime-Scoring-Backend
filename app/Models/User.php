<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'emp_id',
        'is_admin',
        'profile_picture',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

    public function isAdmin(): bool
    {
        return $this->is_admin == true;
    }

    public function contact()
    {
        return $this->hasOne(Contacts::class);
    }

    public function scopeRole($query, $roleName)
    {
        return $query->whereHas('roles', function ($q) use ($roleName) {
            $q->where('name', $roleName);
        });
    }

    public function playerProfile()
    {
        return $this->hasOne(PlayerProfile::class, 'user_id');
    }

    public function playerStatistics()
    {
        return $this->hasOne(PlayerStatistics::class, 'player_id');
    }

    // public function teams()
    // {
    //     return $this->belongsToMany(Team::class)->withPivot('jersey_number', 'is_captain', 'is_vice_captain');
    // }

    public function teams()
    {
        return $this->belongsToMany(Team::class)
            ->using(TeamUser::class)
            ->withPivot('jersey_number', 'is_captain', 'is_vice_captain');
    }

    public function scopeNotInAnyTeam($query)
    {
        return $query->whereDoesntHave('teams');
    }


    public function ownedTeams()
    {
        return $this->hasMany(Team::class, 'owner_id');
    }

    public function matchPlayers()
    {
        return $this->hasMany(MatchPlayer::class, 'player_id');
    }

    public function battingScores()
    {
        return $this->hasMany(BattingScore::class, 'player_id');
    }

    public function bowlingFigures()
    {
        return $this->hasMany(BowlingFigure::class, 'player_id');
    }

    public function medals()
    {
        return $this->hasMany(PlayerMedal::class, 'player_id');
    }

    public function manOfTheMatchAwards()
    {
        return $this->hasMany(Matches::class, 'man_of_the_match_id');
    }

    // Helper methods
    public function hasRole($role)
    {
        return $this->roles()->where('name', $role)->exists();
    }

    public function assignRole($role)
    {
        if (is_string($role)) {
            $role = Role::whereName($role)->firstOrFail();
        }
        $this->roles()->syncWithoutDetaching($role);
    }
}
