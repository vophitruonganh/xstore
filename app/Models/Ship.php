<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Ship
 */
class Ship extends Model
{
    protected $table = 'ship';

    public $timestamps = true;

    protected $fillable = [
        'key',
        'price',
        'status',
        'start_date',
        'end_date'
    ];

    protected $guarded = [];

        
}