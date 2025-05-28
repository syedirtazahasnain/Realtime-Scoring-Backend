<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Contacts extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id', 'phone', 'picture', 'address', 'd_o_j', 'age',
        'city', 'status'
    ];

    public function users(){
        return $this->belongsTo(User::class, 'user_id');
    }
}
