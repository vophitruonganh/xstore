<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ShipOrder
 */
class ShipOrder extends Model
{
    protected $table = 'ship_order';

    public $timestamps = false;

    protected $fillable = [
        'ship_id',
        'order_id'
    ];

    protected $guarded = [];

        
}