<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Commentaire;

class CommentairePolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }
    public function delete(User $user,Commentaire $com){
           return  $user->id==$com->user_id;
    }
}
