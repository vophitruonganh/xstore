<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Province
 */
class Province extends Model
{
    protected $table = 'provinces';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'type'
    ];

    protected $guarded = [];

        
}