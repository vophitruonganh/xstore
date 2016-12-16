<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ProductAttachment
 */
class ProductAttachment extends Model
{
    protected $table = 'product_attachment';

    public $timestamps = false;

    protected $fillable = [
        'product_id',
        'attachment_id'
    ];

    protected $guarded = [];

        
}