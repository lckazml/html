<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Goods;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index(Request $request){
        $goods=Goods::orderBy('id','desc')->where(function($query) use ($request){
            //获取关键字
            $keyword = $request->input('keyword');
            //检测参数
            if(!empty($keyword)) {
                $query->where('name','like','%'.$keyword.'%');
            }

        })->get();


        return view('home.index', ['goods'=>$goods,'request'=>$request]);
    }

}
