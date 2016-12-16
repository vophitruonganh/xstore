<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerOrder
 */
class CustomerOrder extends Model
{
    protected $table = 'customer_order';

    public $timestamps = true;

    protected $fillable = [
        'customer',
        'order'
    ];

    protected $guarded = [];

        
}