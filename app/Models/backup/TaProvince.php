<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaProvince
 */
class TaProvince extends Model
{
    protected $table = 'ta_provinces';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'type',
        'update_at'
    ];

    protected $guarded = [];

        
}