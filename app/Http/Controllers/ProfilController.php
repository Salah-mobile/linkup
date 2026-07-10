<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Commentaire;
use App\Models\Like;
use App\Models\Save;
class ProfilController extends Controller
{
   function showProfil(User $user){
       $posts=Post::where("user_id",$user->id)->get();
        $commentaire=Commentaire::with(['user', 'post'])->latest()->get();
        $likes=Like::with(['user','post'])->latest()->get();
        $saves=Save::with(['post','user'])->latest()->get();
       return view('profile',["user"=>$user,"posts"=>$posts,"commentaire"=>$commentaire,"likes"=>$likes,"saves"=>$saves]);
   }
}
