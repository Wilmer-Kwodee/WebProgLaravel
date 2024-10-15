<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Challenge extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class)->withPivot('completed');
    }
    
}
