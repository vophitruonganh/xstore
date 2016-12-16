<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaTheme
 */
class TaTheme extends Model
{
    protected $table = 'ta_theme';

    public $timestamps = true;

    protected $fillable = [
        'site',
        'name',
        'value',
        'active',
        'update_at'
    ];

    protected $guarded = [];

        
}