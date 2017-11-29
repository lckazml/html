<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CatelistController extends Controller
{
    public function index(Request $request){
        return view('home.list',['request'=>$request]);
    }
}
