<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaSite
 */
class TaSite extends Model
{
    protected $table = 'ta_site';

    public $timestamps = true;

    protected $fillable = [
        'key',
        'value',
        'update_at'
    ];

    protected $guarded = [];

        
}