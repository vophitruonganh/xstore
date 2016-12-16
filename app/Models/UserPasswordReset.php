<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserPasswordReset
 */
class UserPasswordReset extends Model
{
    protected $table = 'user_password_resets';

    public $timestamps = true;

    protected $fillable = [
        'email',
        'remember_token'
    ];

    protected $guarded = [];

        
}