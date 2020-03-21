<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class UserOrders extends Eloquent
{
    protected $connection = 'mongodb';
    protected $collection = 'UserOrders';

    protected $fillable = [
        'email',
        'name',
        'nickName',
        'password',
        'phoneNumber'
    ];
}
