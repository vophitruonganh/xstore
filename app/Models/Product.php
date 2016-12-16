<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;
/**
 * Class Product
 */
class Product extends Model
{
    protected $table = 'products';

    public $timestamps = true;

    protected $fillable = [
        'name',
        'url',
        'price',
        'count',
        'sale',
        'status',
        'active',
        'trademark_id'
    ];

    protected $guarded = [];

    function trademark(){
        $trademark = $this->belongsToMany(app('trademark'),'product_trademark');

        return $trademark;
    }

    function category(){
        $trademark = $this->belongsToMany(app('category'),'product_category');

        return $trademark;
    }

    function attachment(){
        return $this->belongsToMany(app('attachment'),'product_attachment');
    }
}