<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Permission
 */
class Permission extends Model
{
    protected $table = 'permission';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'role_id'
    ];

    protected $guarded = [];

        
}