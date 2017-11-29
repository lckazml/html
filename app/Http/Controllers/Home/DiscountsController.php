<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DiscountsController extends Controller
{
    public function index(Request $request){
        return view('home.discounts',['request'=>$request]);
    }
}
