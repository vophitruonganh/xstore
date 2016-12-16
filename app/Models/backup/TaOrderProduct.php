<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaOrderProduct
 */
class TaOrderProduct extends Model
{
    protected $table = 'ta_order_product';

    public $timestamps = true;

    protected $fillable = [
        'date',
        'product',
        'order',
        'update_at'
    ];

    protected $guarded = [];

        
}