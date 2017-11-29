@extends('layouts.master')
@section('title','品牌折扣')
@section('content')

<!-- content start -->

    <ul class="sales-list hiden">    	
        <li>
        	<a href="活动详情-自定义.html">
            	<img src="{{asset('Uploads/list-img1.jpg')}}">
                <h3 class="n t_hide">企业个性化定制</h3>
                <p class="c9 t_hide">企业宣传/客户回馈/节日福利/员工关怀</p>
                <input type="button" value="入场抢购" class="sales-in">
            </a>
        </li>
        <li>
        	<a href="javascript:void(0)">
            	<img src="{{asset('Uploads/list-img2.jpg')}}">
                <h3 class="n t_hide">企业个性化定制</h3>
                <p class="c9 t_hide">企业宣传/客户回馈/节日福利/员工关怀</p>
                <input type="button" value="活动结束" class="sales-over">
            </a>
        </li>
        <li>
        	<a href="活动详情-自定义.html">
            	<img src="{{asset('Uploads/list-img1.jpg')}}">
                <h3 class="n t_hide">企业个性化定制</h3>
                <p class="c9 t_hide">企业宣传/客户回馈/节日福利/员工关怀</p>
                <input type="button" value="入场抢购" class="sales-in">
            </a>
        </li>
        <li>
        	<a href="javascript:void(0)">
            	<img src="{{asset('Uploads/list-img2.jpg')}}">
                <h3 class="n t_hide">企业个性化定制</h3>
                <p class="c9 t_hide">企业宣传/客户回馈/节日福利/员工关怀</p>
                <input type="button" value="活动结束" class="sales-over">
            </a>
        </li>
    </ul>    
    <a href="customized.blade.php"><img src="{{asset('images/foot-banner.jpg')}}" class="foot-banner"></a>

<!-- content end -->
@endsection