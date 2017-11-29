<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    public function cate(){
        return $this->belongsTo('App\Goods_cates','goods_cates_id');
    }
}

