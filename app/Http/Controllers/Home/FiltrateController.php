<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Goods;

class FiltrateController extends Controller
{
    //筛选控制器
    public function index(Request $request){
        $goods=Goods::orderBy('id','desc')->where(function($query) use ($request){
            //获取关键字
            $keyword=$request->input('keyword');
            //检查参数
            if (!empty($keyword)){
                $query->where('name','like','%'.$keyword.'%');
            }
        })->paginate(2);

        return view('home.filtrate',['goods'=>$goods,'request'=>$request]);
    }
    public function price(Request $request){


        return view('home.filtrate');
    }
    public function newgoods(Request $request){
        $goods=Goods::orderBy('id','desc')->paginate(2);
        return view('home.filtrate',['goods'=>$goods,'request'=>$request]);
    }
    public function search(Request $request){
        //条件筛选
        $goods=Goods::orderBy('id','desc')->where(function($query) use ($request){
            $lowprice=$request->input('lowprice');
            $hightprice=$request->input('hightprice');
            if(!empty($lowprice)&&!empty($hightprice)){
                $query->whereBetween('price',[$lowprice,$hightprice]);
            }elseif (!empty($lowprice)){
                $query->where('price','>=',$lowprice);
            }elseif (!empty($hightprice)){
                $query->whereBetween('price',[0,$hightprice]);
            }else{
                $query->where('price','>=',0);
            }
        })
            ->where(function($query) use ($request){
                $numberL=$request->input('numberL');
                $numberH=$request->input('numberH');
                if(!empty($numberL)&&!empty($numberH)){
                    $query->whereBetween('repertory',[$numberL,$numberH]);
                }elseif (!empty($numberL)){
                    $query->where('repertory','>=',$numberL);
                }elseif (!empty($numberH)){
                    $query->whereBetween('repertory',[0,$numberH]);
                }else{
                    $query->where('repertory','>=',0);
                }

            })->paginate(2);

        return view('home.filtrate',['goods'=>$goods,'request'=>$request]);
    }
}
