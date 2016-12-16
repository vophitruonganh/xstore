<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class PostAttachment
 */
class PostAttachment extends Model
{
    protected $table = 'post_attachment';

    public $timestamps = false;

    protected $fillable = [
        'post_id',
        'attachment_id'
    ];

    protected $guarded = [];

        
}