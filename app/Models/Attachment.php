<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
use Storage;
/**
 * Class Attachment
 */
class Attachment extends Model
{
    protected $table = 'attachments';

    public $timestamps = true;

    protected $fillable = [
        'user_id',
        'title',
        'url',
        'description',
        'date',
        'mime_type'
    ];

    protected $guarded = [];
}