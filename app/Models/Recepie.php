<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recepie extends Model
{

    public $timestamnps = false;

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

    public function pictures() {
        return $this->hasMany('App\Models\RecepiePicture');
    }
}
