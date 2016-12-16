<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class OrderProduct
 */
class OrderProduct extends Model
{
    protected $table = 'order_product';

    public $timestamps = true;

    protected $fillable = [
        'product_id',
        'order_id'
    ];

    protected $guarded = [];

        
}