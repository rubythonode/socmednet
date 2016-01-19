<?php

namespace Socmednet;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract
{
    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
    
    /**
     * The list of fields to be shown in the table.
     * 
     * @var array
     */
    public $tableField = ['email' => 'Email', 'name' => 'Name', 'createdAt' => 'Created At'];
    
    public $formField = [
        'email' => [
            'title' => 'Email',
            'type' => 'text'
        ],
        'name' => [
            'title' => 'Name',
            'type' => 'text'
        ]
    ];
    
    public $baseURL = 'users';
    
    
    
    /**
     * The groups belong to user.
     */
    public function roles()
    {
        return $this->belongsToMany('Socmednet\Role', 'users_roles', 'user_id', 'role_id');
    }
}
