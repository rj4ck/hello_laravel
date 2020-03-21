<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    //
    protected $connection = 'mongodb';
    protected $collection = 'Users';

    protected $fillable = [
        'email',
        'name',
        'nickName',
        'password',
        'phoneNumber'
    ];
}
