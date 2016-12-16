<?php

namespace Xstore\Models;

use Illuminate\Database\Eloquent\Model;
use Eloquent;
/**
 * Class TaTrademark
 */
class TaTrademark extends Eloquent
{
    protected $table = 'ta_trademark';

    public $timestamps = true;

    protected $fillable = [
        'category',
        'name',
        'url',
        'image',
        'active',
        'update_at'
    ];

    protected $guarded = [];

    public function category(){
        return $this->belongsTo('Xstore\Models\TaCategory');
    }

    public function product(){
        return $this->hasMany('Xstore\Models\TaTrademark');
    }
}