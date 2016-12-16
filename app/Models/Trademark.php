<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Trademark
 */
class Trademark extends Model
{
    protected $table = 'trademarks';

    public $timestamps = true;

    protected $fillable = [

        'name',
        'category_id',
        'url',
        'image',
        'active'
    ];

    protected $guarded = [];

    function category(){
        return $this->hasMany(app('category'),'id');
    }
}