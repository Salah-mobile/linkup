<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;
class Save extends Model
{
    protected $fillable = [
        'user_id',
        'post_id',
    ];
    function user(){
        return $this->belongsTo(User::class);
    }
    function post(){
        return $this->belongsTo(Post::class);
    }
}
