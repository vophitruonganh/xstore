<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductTrademark
 */
class ProductTrademark extends Model
{
    protected $table = 'product_trademark';

    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'trademark_id'
    ];

    protected $guarded = [];

        
}