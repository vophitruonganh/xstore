<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Site
 */
class Site extends Model
{
    protected $table = 'sites';

    public $timestamps = true;

    protected $fillable = [
        'key',
        'value'
    ];

    protected $guarded = [];

        
}