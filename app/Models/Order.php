<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    public $timestamps = false;

    protected $table = 'Orders';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'package',
        'quantity',
        'f_name',
        's_name',
        'email',
        'phone',
        'place',
        'street',
        'post_code',
        'spec_req',
    ];

    protected $cast = [
        'package'   =>  'string',
        'quantity'  =>  'integer',
        'f_name'    =>  'string',
        's_name'    =>  'string',
        'email'     =>  'string',
        'phone'     =>  'string',
        'place'     =>  'string',
        'street'    =>  'string',
        'post_code' =>  'integer',
        'spec_req'  =>  'string',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [

    ];
}
