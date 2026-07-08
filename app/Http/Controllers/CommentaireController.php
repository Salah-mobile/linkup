<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Commentaire;
class CommentaireController extends Controller
{
    function createCom(Request $request){
      $request->validate([
        "com"=>"required|max:500",
      ]);
      Commentaire::create([
        "user_id"=>$request->user_id,
        "post_id"=>$request->post_id,
        "content"=>$request->com,
      ]);
    return to_route("feed");
    }
    function deleteCom(){

    }
    function updateCom(){

    }
}
