<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * Class User
 */
class User extends Authenticatable
{
    protected $table = 'users';

    public $timestamps = true;

    protected $fillable = [
        'firstname',
        'lastname',
        'dob',
        'address',
        'district_id',
        'idcard',
        'email',
        'password',
        'phone',
        'sex',
        'status',
        'active',
        'role_id',
        'remember_token'
    ];

    protected $guarded = [];


}