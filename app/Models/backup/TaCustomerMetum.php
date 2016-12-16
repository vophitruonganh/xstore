<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaCustomerMetum
 */
class TaCustomerMetum extends Model
{
    protected $table = 'ta_customer_meta';

    public $timestamps = true;

    protected $fillable = [
        'customer',
        'meta_key',
        'meta_value',
        'update_at'
    ];

    protected $guarded = [];

        
}