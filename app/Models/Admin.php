<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{

    public $timestamps = false;

    protected $table = 'Admins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'username',
        'email',
        'passwordSalt',
        'reset_token', 
    ];

    protected $cast = [
        'username'      =>  'string',
        'email'         =>  'string',
        'passwordSalt'  =>  'string',
        'reset_token'   =>  'string', 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password'
    ];
}
