<?php

namespace App\Http\Controllers\Home;

use App\Goods;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailsController extends Controller
{
    //
    public function index(Request $request ,$id){
        $details=Goods::findOrFail($id);
        return view('home.details',['request'=>$request]);
    }
}
