<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrademarkCategory
 */
class TrademarkCategory extends Model
{
    protected $table = 'trademark_category';

    public $timestamps = false;

    protected $fillable = [
        'trademark_id',
        'category_id'
    ];

    protected $guarded = [];

        
}