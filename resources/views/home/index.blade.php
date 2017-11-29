@extends('layouts.master')
@section('title','首页')
@section('content')
<!-- content start -->

	<a href="customized.blade.php"><img src="./images/home-banner.jpg" class="home-banner"></a>

    <ul class="nav hiden">
    	<li><a href="{{url('filtrate')}}">价格筛选</a></li>
        <li><a href="{{url('discounts')}}">品牌折扣</a></li>
        <li><a href="addvertising">广告促销</a></li>
        <li><a href="/list">卧室家具</a></li>
        <li><a href="">客厅家具</a></li>
        <li><a href="">餐厅家具</a></li>
        <li><a href="">书房家具</a></li>
        <li><a href="">特价衣柜</a></li>
        <li><a href="">实木衣柜</a></li>
        <li><a href="">双人床</a></li>
        <li><a href="">红木家具</a></li>
        <li><a href="">真皮家具</a></li>
    </ul>
    <h2 class="home-title n">热销产品 / <i>HOT-SALE PRODUCT</i></h2>
    <ul class="home-list hiden">
    	@foreach($goods as $k=>$v)
        <li>
        	<a href="details/{{$v->id}}">
            	<img src="./Uploads/product-img-1.jpg">
                <h3 class="c6 s18">{{$v->name}}</h3>
                <p class="c9 t_hide">高端纯棉短袖圆领T高端纯棉短袖圆领T恤180克纯色恤180克纯色</p>
                <span class="font1 s18">{{$v->price}}</span>
            </a>
        </li>
        @endforeach
    </ul>
    {{--<div class="dataTables_paginate paging_full_numbers" id="DataTables_Table_1_paginate">--}}
        {{--<div id="pages">--}}
            {{--{!! $goods->appends($request->only(['num','keyword']))->render() !!}--}}
        {{--</div>--}}
    {{--</div>--}}
    <a href="customized.blade.php"><img src="./images/foot-banner.jpg" class="foot-banner"></a>

<!-- content end -->
@endsection


