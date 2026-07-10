<?php
namespace App\Http\Controllers;
use  App\Models\Post;
use  App\Models\Save;
use  App\Models\Commentaire;
use  App\Models\Like;
use  App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SaveController extends Controller
{
     function toogleSave(Post $post){
         $save=Save::where("user_id",Auth::id())->where("post_id",$post->id)->first();
         if($save){
            $save->delete();
         }else{
            Save::create([
                "user_id"=>Auth::id(),
                "post_id"=>$post->id,
            ]);
         }
         return back();
     }

}
