<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaOrder
 */
class TaOrder extends Model
{
    protected $table = 'ta_order';

    public $timestamps = true;

    protected $fillable = [
        'user',
        'date',
        'status',
        'active',
        'update_at'
    ];

    protected $guarded = [];

        
}