<?php

namespace App\Policies;

use App\User;
Use App\Post;

use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;

    public function update(User $user, Post $post)
    {
        return $user->ownsPost($post);
    }
}
