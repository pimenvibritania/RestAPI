<?php 

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;		

/**
 * summary
 */
class UserTransformer extends TransformerAbstract
{
    /**
     * summary
     */
    public function transform(User $user)

    {	
    	return [
            'id'            => $user->id,
    		'name' 			=> $user->name,
    		'email'			=> $user->email,
    		'registered'	=> $user->created_at->diffForHumans(),

    	];
        
    }
}

					
