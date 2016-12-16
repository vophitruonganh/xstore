<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductCategory
 */
class ProductCategory extends Model
{
    protected $table = 'product_category';

    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'category_id'
    ];

    protected $guarded = [];

        
}