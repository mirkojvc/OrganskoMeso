<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{

    public $timestamnps = false;

    protected $table = 'recepies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'heading', 
        'ingredients',
        'how_to_make',
    ];

    protected $cast = [
        'heading'             =>  'string', 
        'ingredients'         =>  'text',
        'how_to_make'         =>  'text',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      
    ];
}