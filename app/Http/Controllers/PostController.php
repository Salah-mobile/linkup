<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use  App\Models\Post;
class PostController extends Controller
{
    public function index(){
        $posts=Post::with('user')->latest()->get();
        return view('feed',['posts'=>$posts]);
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
    public function upadtePoste(){

    }
    public function pageupadtePoste(){

    }
    public function deletePoste(){

    }
}
