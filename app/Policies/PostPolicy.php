<?php

namespace App\Policies;

use App\Post;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }
    public function viewPost(User $user, Post $post){
        
        dd($user);
    }
    public function editPost(User $user, Post $post){
        foreach($user->roles as $role){
            foreach($role->permissions as $permission){
                if($permission->id == 2){
                    return true;
                }
            }
        }
        return true;
    }
}
