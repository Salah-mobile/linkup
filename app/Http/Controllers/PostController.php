<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\Post;
use  App\Models\Commentaire;
class PostController extends Controller
{
    public function index(){
        $posts=Post::with('user')->latest()->get();
        $commentaire=Commentaire::with(['user', 'post'])->latest()->get();
        return view('feed',['posts'=>$posts,'commentaire'=>$commentaire]);
    }
    public function createPoste(Request $request){
            $request->validate([
                "poste"=>"required|min:20"
            ]);
            Post::create([
                "content"=>$request->poste,
                "user_id"=>auth()->id(),
            ]);
            return to_route("feed");
    }
    public function upadtePoste(Post $post,Request $request){
          $request->validate(["content"=>"required|min:20"]);
          $post->update([
            "content"=>$request->content,
          ]);
          return to_route("feed");
    }
    public function pageupadtePoste(Post $post){
        return view("auth.UpdatePostPage",["post"=>$post]);
    }
    public function deletePoste(Post $post){
        $post->delete();
        return to_route("feed");
    }
}
