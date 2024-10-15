<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserChallenge extends Model
{
    use HasFactory;

    public function challenge()
    {
        return $this->belongsTo(Challenge::class);
    }

    protected $fillable = [
        'user_id',      // Add user_id here
        'challenge_id', // Add challenge_id here as well
        'created_at',
        'updated_at',
    ];
}
