<?php

namespace Socmednet\Policies;

use Illuminate\Auth\Access\HandlesAuthorization;
use Auth;
use Socmednet\User;

class UserModulePolicy
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
    
    public function index(User $user)
    {
        //print_r($user->groups()->where('is_admin', '1')->first());
        //$user = Auth::user();
        //$model = $user->load(['groups' => function ($query) {
        //    $query->where('is_admin', '1');
        //}])->first();
        //print_r($model);
        //die();
        //return !empty($model);
        return true;
    }
}
