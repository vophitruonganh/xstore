<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaAttachmentUser
 */
class TaAttachmentUser extends Model
{
    protected $table = 'ta_attachment_user';

    public $timestamps = true;

    protected $fillable = [
        'user',
        'attachment',
        'update_at'
    ];

    protected $guarded = [];

        
}