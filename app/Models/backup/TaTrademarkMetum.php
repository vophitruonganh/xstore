<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaTrademarkMetum
 */
class TaTrademarkMetum extends Model
{
    protected $table = 'ta_trademark_meta';

    protected $primaryKey = 'trademark';

	public $timestamps = true;

    protected $fillable = [
        'meta_key',
        'meta_value',
        'update_at'
    ];

    protected $guarded = [];

        
}