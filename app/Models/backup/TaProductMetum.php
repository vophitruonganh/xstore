<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaProductMetum
 */
class TaProductMetum extends Model
{
    protected $table = 'ta_product_meta';

    public $timestamps = true;

    protected $fillable = [
        'product',
        'meta_key',
        'meta_value',
        'update_at'
    ];

    protected $guarded = [];

        
}