<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;
    protected $table="likes";

    public function user(){
        return $this->belongsTo(User::class, "userId");
    }

    public function post(){
        return $this->belongsTo(Post::class, "postId");
    }
}
