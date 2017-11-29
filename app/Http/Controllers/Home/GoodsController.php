<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GoodsController extends Controller
{
    public function cate()
    {
        return $this->belongsTo('App\Cate');
    }
}
