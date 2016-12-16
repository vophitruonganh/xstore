<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Customer
 */
class Customer extends Model
{
    protected $table = 'customer';

    public $timestamps = true;

    protected $fillable = [
        'firstname',
        'lastname',
        'dob',
        'address',
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