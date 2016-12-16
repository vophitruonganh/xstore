<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
/**
 * Class TaUser
 */
class TaUser extends Authenticatable
{
    protected $table = 'ta_user';

    public $timestamps = true;

    protected $fillable = [
        'firstname',
        'lastname',
        'image',
        'dob',
        'address',
        'district',
        'idcard',
        'email',
        'password',
        'phone',
        'sex',
        'status',
        'active',
        'roll',
        'remember_token'
    ];

    protected $guarded = [];
}