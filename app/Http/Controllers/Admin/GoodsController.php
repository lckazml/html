<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Goods;
use DB;
use App\Goods_cates;

class GoodsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   $cates=self::getCates();

        $goods=Goods::orderBy('id','desc')->get();

        return view('admin.goods.index',['goods'=>$goods,'cates'=>$cates]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function getCates(){
        $cates=Goods_cates::select(DB::raw('*,concat(path,",",id) as paths'))->orderBy('paths')->get();

        foreach($cates as $key => $value){
            $tmp=count(explode(',',$value->path))-1;
            $prefix=str_repeat('|---',$tmp);

            $value->name=$prefix.$value->name;
            if ($value->pid==0){
                $value->pid='顶级分类';
            }else{
                $value->pid=$value->name;
            }
        }

        return $cates;
    }
    public function create()
    {
        $cates=self::getCates();
        return view('admin.goods.add',['cates'=>$cates]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
 //       "goodsname" => "手及"
//  "localsale" => "110"
//  "marksale" => "120"
//  "optionsRadios" => "option1"
//  "is_promote" => "1"
//  "goodsdetails" => "阿斯顿发送到"
        $goods=$request->all();

        $addgoods=new Goods();

        $addgoods->name=$goods['goodsname'];
        $addgoods->price=$goods['localsale'];
        //分类ID
        $addgoods->goods_cates_id=$goods['cate'];

        $addgoods->repertory='100';
        $addgoods->status=$goods['optionsRadios'];
        $addgoods->is_top='1';
        //是否促销
        $addgoods->is_promote=((isset($goods['is_promote']))?$goods['is_promote']:"0");
        $addgoods->promote_price=((isset($goods['promote_price']))?$goods['promote_price']:"");
        $addgoods->content=$goods['goodsdetails'];

        //图片上传
        dd($request->hasFile('img'));
        if ($request->hasFile('img')){
            $path=$request->img->store('./Uploads/goods');
            dd($path);

        }
        if ($addgoods->save()){
            return redirect('/jump')->with(['message'=>'添加成功','url'=>'admin/goods','jumpTime'=>'2','status'=>true]);
        }else{
            return redirect('/jump')->with(['message'=>'添加失败','url'=>'admin/goods','jumpTime'=>'2','status'=>false]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $goods=Goods::findOrFail($id);
        return view('admin.edit');

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
