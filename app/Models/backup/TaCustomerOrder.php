<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaCustomerOrder
 */
class TaCustomerOrder extends Model
{
    protected $table = 'ta_customer_order';

    public $timestamps = true;

    protected $fillable = [
        'customer',
        'order',
        'update_at'
    ];

    protected $guarded = [];

        
}