<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class UserExtend
 */
class UserExtend extends Model
{
    protected $table = 'user_extends';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'meta_key',
        'meta_value'
    ];

    protected $guarded = [];

        
}