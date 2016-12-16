<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
/**
 * Class TaCategory
 */
class TaCategory extends Eloquent
{
    protected $table = 'ta_category';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'url',
        'image',
        'active',
        'update_at'
    ];

    protected $guarded = [];


}