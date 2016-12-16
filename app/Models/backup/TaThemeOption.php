<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class TaThemeOption
 */
class TaThemeOption extends Model
{
    protected $table = 'ta_theme_option';

    public $timestamps = true;

    protected $fillable = [
        'site',
        'theme_option_name',
        'theme_option_value',
        'theme_option_active'
    ];

    protected $guarded = [];

        
}