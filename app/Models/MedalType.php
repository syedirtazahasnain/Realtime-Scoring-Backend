<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MedalType extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = ['name', 'description', 'image'];

    public function medals()
    {
        return $this->hasMany(PlayerMedal::class);
    }
}
