<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class District
 */
class District extends Model
{
    protected $table = 'districts';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'province_id'
    ];

    protected $guarded = [];

        
}