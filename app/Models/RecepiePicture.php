<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecepiePicture extends Model
{

    public $timestamnps = false;

    protected $table = 'RecepiePictures';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'recepie_id', 
        'picture',
    ];

    protected $cast = [
        'recepie_id'    =>  'integer', 
        'picture'       =>  'integer',
        
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
      
    ];

    public function recepie() {
        return $this->belongsTo('App\Models\Recepie');
    }
}
