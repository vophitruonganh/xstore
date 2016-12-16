<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Theme
 */
class Theme extends Model
{
    protected $table = 'themes';

    public $timestamps = true;

    protected $fillable = [
        'site_id',
        'theme_option_name',
        'theme_option_value',
        'theme_option_active'
    ];

    protected $guarded = [];

        
}