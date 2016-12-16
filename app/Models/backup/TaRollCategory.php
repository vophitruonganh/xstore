<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaRollCategory
 */
class TaRollCategory extends Model
{
    protected $table = 'ta_roll_category';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'roll'
    ];

    protected $guarded = [];

        
}