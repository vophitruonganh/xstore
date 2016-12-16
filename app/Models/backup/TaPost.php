<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaPost
 */
class TaPost extends Model
{
    protected $table = 'ta_post';

    public $timestamps = true;

    protected $fillable = [
        'product',
        'category',
        'data',
        'active',
        'update_at'
    ];

    protected $guarded = [];

        
}