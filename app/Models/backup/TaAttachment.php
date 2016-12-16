<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaAttachment
 */
class TaAttachment extends Model
{
    protected $table = 'ta_attachment';

    public $timestamps = true;

    protected $fillable = [
        'title',
        'url',
        'description',
        'date',
        'type',
        'mime_type',
        'category',
        'product',
        'post',
        'update_at'
    ];

    protected $guarded = [];

        
}