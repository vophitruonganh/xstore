<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaDistrict
 */
class TaDistrict extends Model
{
    protected $table = 'ta_districts';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'province',
        'update_at'
    ];

    protected $guarded = [];

        
}