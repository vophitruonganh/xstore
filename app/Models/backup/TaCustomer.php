<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaCustomer
 */
class TaCustomer extends Model
{
    protected $table = 'ta_customer';

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
        'roll_id',
        'remember_token',
        'update_at'
    ];

    protected $guarded = [];

        
}