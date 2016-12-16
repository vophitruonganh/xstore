<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TrademarkExtend
 */
class TrademarkExtend extends Model
{
    protected $table = 'trademark_extends';

    protected $primaryKey = 'trademark_id';

	public $timestamps = true;

    protected $fillable = [
        'meta_key',
        'meta_value'
    ];

    protected $guarded = [];

        
}