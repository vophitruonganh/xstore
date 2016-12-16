<?php

namespace Xstore\Models;
use Eloquent;
/**
 * Class TaProduct
 */
class TaProduct extends Eloquent
{
    protected $table = 'ta_product';

    public $timestamps = true;



    protected $guarded = [];

    public function trademarks(){
        return $this->belongsTo('Xstore\Models\TaTrademark','trademark');
    }

}