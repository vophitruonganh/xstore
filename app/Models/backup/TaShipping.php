<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaShipping
 */
class TaShipping extends Model
{
    protected $table = 'ta_shipping';

    public $timestamps = true;

    protected $fillable = [
        'category',
        'key',
        'price',
        'status',
        'active',
        'start_date',
        'end_date',
        'order',
        'update_at'
    ];

    protected $guarded = [];

        
}