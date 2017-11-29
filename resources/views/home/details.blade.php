@extends('layouts.master')
@section('title','详情')
@section('content')
<!-- content start -->


    <div class="product-detail bf">
    	<img src="{{asset('Uploads/detail-1.jpg')}}" class="detail-img">
        <div class="detail-info">
        	<h2 class="s18 n c6 hiden"><span>产品名称：</span><span>创意鹅卵石充电宝定制10400毫安通用小巧便携移动电源定制对不符合本</span></h2>
        	<del class="b c9">市场价：103.50元</del>
        	<p><b class="s24">￥69.00</b> /单价</p>
        	<div class="detail-num">购买数量：<input type="text"><span><input type="button" class="num-add"><input type="button" class="num-reduce"></span>个</div>
        	<input type="button" value="立即购买" class="btn-buy"><input type="button" value="加入购物车" class="btn-car">
            <h3 class="detail-title n s18"><span>详情描述</span> | <span>商品咨询（10000）</span></h3>
        </div>        
        <div class="detail-con goods-con">
        	<img src="{{asset('Uploads/detail-2.jpg')}}" style="width:5.34rem;">
        </div>
        <div class="detail-con goods-ask">
        	<ul>
            	<li>
                	<h3 class="n c6 s18">怎么不出款可以充电的电池<span class="fr c9 s14">2016年5月18日</span></h3>
                    <p class="c9">您好，官网下单的产品，单笔订单实际支付满150元包邮，订单实际支付金额不足150元，需按
照10元/单标准支付邮费，小米电视、净水器、体重秤等产品因商品特殊性不参与满150元。</p>
					<p class="c9 tr s15">2016年5月29日</p>
                </li>
                <li>
                	<h3 class="n c6 s18 red">怎么不出款可以充电的电池<span class="fr c9 s14">2016年5月18日</span></h3>
                    <p class="c9">您好，官网下单的产品，单笔订单实际支付满</p>
					<p class="c9 tr s15">2016年5月29日</p>
                </li>
                <li>
                	<h3 class="n c6 s18">怎么不出款可以充电的电池<span class="fr c9 s14">2016年5月18日</span></h3>
                    <p class="c9">您好，官网下单的产品，单笔订单实际支付满</p>
					<p class="c9 tr s15">2016年5月29日</p>
                </li>
            </ul>
            <a href="" class="ask-all">查看所有商品咨询 ></a>	
            <form class="ask-form s18">
            	<h4 class="c6">商品咨询</h4>
                <h5 class="c9 n">标题：创意鹅卵石充电宝定制10400毫安通用小巧便携移动电源定制</h5>
                <p><label>咨询内容：</label><span><textarea></textarea></span></p>
                <p><label>联系方式：</label><span><input type="text"><br><font class="c9 s12">（可以是电话，QQ，email，微信号等）</font></span></p>
                <input type="button" value="提交咨询" class="ask-btn">
            </form>
        </div>
    </div>    
    <a href="customized.blade.php"><img src="{{asset('images/foot-banner.jpg')}}" class="foot-banner"></a>

<!-- content end -->
@endsection