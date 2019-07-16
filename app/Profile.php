<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $fillable = [
        'name',
        'motto',
        'mission',
        'vision',
        'email',
        'phone',
        'instagram',
        'twitter',
        'facebook',
        'about',
        'address',
        'location'
    ];
}
