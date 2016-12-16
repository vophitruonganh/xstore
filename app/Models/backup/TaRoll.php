<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaRoll
 */
class TaRoll extends Model
{
    protected $table = 'ta_roll';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'active',
        'update_at'
    ];

    protected $guarded = [];

        
}