<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaUserPasswordReset
 */
class TaUserPasswordReset extends Model
{
    protected $table = 'ta_user_password_resets';

    public $timestamps = true;

    protected $fillable = [
        'email',
        'remember_token'
    ];

    protected $guarded = [];

        
}