<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaPermission
 */
class TaPermission extends Model
{
    protected $table = 'ta_permission';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'roll',
        'update_at'
    ];

    protected $guarded = [];

        
}