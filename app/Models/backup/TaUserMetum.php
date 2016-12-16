<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaUserMetum
 */
class TaUserMetum extends Model
{
    protected $table = 'ta_user_meta';

    public $timestamps = true;

    protected $fillable = [
        'user',
        'meta_key',
        'meta_value',
        'update_at'
    ];

    protected $guarded = [];

        
}