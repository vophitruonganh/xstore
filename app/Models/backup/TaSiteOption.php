<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaSiteOption
 */
class TaSiteOption extends Model
{
    protected $table = 'ta_site_option';

    public $timestamps = true;

    protected $fillable = [
        'key',
        'value'
    ];

    protected $guarded = [];

        
}