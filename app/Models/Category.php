<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Category
 */
class Category extends Model
{
    protected $table = 'category';

    public $timestamps = true;

    protected $fillable = [
    	'id',
        'name',
        'url',
        'image',
        'active'
    ];

    protected $guarded = [];


}