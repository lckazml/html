<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
<meta name="format-detection" content="email=no,address=no,telephone=no">
<title>@yield('title')</title>
<link rel="stylesheet" href="{{asset('/css/common.css')}}">
    <link href="{{asset('/Hui-iconfont/1.0.8/iconfont.css')}}" rel="stylesheet" type="text/css" />
<script src="{{asset('/js/jquery-1.12.1.min.js')}}"></script>
<script>
$(document).ready(function(){
    var deviceWidth=$(window).outerWidth();
	if(deviceWidth>640){
    	$("html").css("font-size","100px");    	
	}else{
    	$("html").css("font-size",deviceWidth/640*100+'px');    	
	}
});
</script>

    @section('script')
        @show

<script src="{{asset('/js/common.js')}}"></script>
</head>

<body>
<!-- header start -->
<header class="top">
	<div class="con">
		{{--<a href="" class="top-menu">菜单</a>	    	--}}
    	{{--<a href="" class="top-car">购物车</a>--}}
        <h1>@yield('title')</h1>
    </div>
</header>
<!-- header end -->

<section class="wrap">
    <form action="/filtrate">
        <div class="search hiden">
            <input type="text" placeholder="请输入您想要的商品" class="search-text" name="keyword" value="{{$request->input('keyword')}}">
            <button  class="search-btn" ></button>
        </div>
    </form>
    @section('content')

    @show
</section>
<!-- content end -->

<!-- menu start -->
<div class="menu">

	<ul class="con hiden">
    	<li class="menu-this"><a href="/" class="menu-1">首页</a></li>
        <li><a href="" class="menu-2">地图导航</a></li>
        <li><a href="sms:18883787572" class="menu-3">信息咨询</a></li>
        <li><a href="tel:18883787572" class="menu-4">电话咨询</a></li>
        <li><a href="" class="menu-5">会员中心</a></li>
    </ul>
</div>
<!-- menu end -->
</body>
</html>