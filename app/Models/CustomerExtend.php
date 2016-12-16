<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerExtend
 */
class CustomerExtend extends Model
{
    protected $table = 'customer_extends';

    public $timestamps = true;

    protected $fillable = [
        'customer_id',
        'meta_key',
        'meta_value'
    ];

    protected $guarded = [];

        
}