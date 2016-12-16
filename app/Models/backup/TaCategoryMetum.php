<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaCategoryMetum
 */
class TaCategoryMetum extends Model
{
    protected $table = 'ta_category_meta';

    public $timestamps = true;

    protected $fillable = [
        'category',
        'meta_key',
        'meta_value',
        'update_at'
    ];

    protected $guarded = [];

        
}