<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Like extends Model
{
    use HasFactory;
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
