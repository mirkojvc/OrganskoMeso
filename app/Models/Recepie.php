<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recepie extends Model
{

    public $timestamps = false;

    protected $table = 'Recepies';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'heading',
        'ingredients',
        'how_to_make',
        'picture',
        'approved',
    ];

    protected $cast = [
        'heading'       =>  'string',
        'ingredients'   =>  'string',
        'how_to_make'   =>  'string',
        'picture'       =>  'string',
        'approved'      =>  'boolean',    
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];

    public function pictures() {
        return $this->hasMany('App\Models\RecepiePicture');
    }
}
