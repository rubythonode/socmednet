<?php

namespace Socmednet;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'roles';
    
    /**
     * The users that belong to the group.
     */
    public function users()
    {
        return $this->belongsToMany('Socmednet\User');
    }
}
