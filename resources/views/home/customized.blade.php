@extends('layouts.master')
@section('title','定制')
@section('content')

<!-- content start -->

	<a href=""><img src="images/home-banner.jpg" class="home-banner"></a>
    <div class="search hiden">
    	<input type="text" placeholder="请输入您想要的商品" class="search-text">
        <input type="button" class="search-btn" onclick="location.href='filtrate.blade.php'">
    </div>
    <div class="made-hot bf hiden">
    	<div class="fl">
        	<h2 class="made-title1">定制爆款NO.1</h2>
        	<h3 class="n c6">电小二充电宝</h3>
        	<p class="c9">与iPhone6一样轻薄</p>
        	<p class="c9">采用iPhone原厂电芯</p>
            <p class="c9">手感完美匹配iPhone6</p>
            <p class="c9">可延长iPhone6通话时间28小时，上网时间20小时</p>        	
        </div>
        <img src="images/made-img1.jpg" class="fl made-img-1">
        <div class="made-price hiden">
        	<span class="fl">
            	<em class="orange fl">43</em>
                <font class="orange">元起</font>
                <p>U盘可根据需求定制容量</p>
            </span>            
            <a href="活动详情-自定义.html" class="fl">立即定制</a>
        </div>        
        <ul>
        	<li>
            	<a href="活动详情-自定义.html">
                	<h3 class="n c6">卡片优盘4G</h3>
                    <p class="c9 s12">卡片式U盘，小巧便捷，携带方便</p>
                    <span class="orange"><font>35</font>元起</span>
                    <input type="button" value="立即定制">
                    <img src="images/made-img2.jpg" class="made-img-2">
                </a>
            </li>
           	<li>
            	<a href="活动详情-自定义.html">
                	<h3 class="n c6">卡片优盘4G</h3>
                    <p class="c9 s12">卡片式U盘，小巧便捷，携带方便</p>
                    <span class="orange"><font>35</font>元起</span>
                    <input type="button" value="立即定制">
                    <img src="images/made-img3.jpg" class="made-img-3">
                </a>
            </li>
        </ul>    	
    </div>
    <a href=""><img src="images/made-banner.jpg"></a>
 	<div class="made-hot bf hiden">
    	<div class="fl">
        	<h2 class="made-title2">定制爆款NO.2</h2>
        	<h3 class="n c6">金属移动优盘</h3>
        	<p class="c9">优盘可根据需求定制容量<br>4G 8G 16G 32G</p>
        	<p class="c9">详情可咨询在线客服人员</p>
        	<p class="orange">100起订</p>
        </div>
        <img src="images/made-img4.jpg" class="fl made-img-4">
        <div class="made-price hiden">
        	<span class="fl">
            	<em class="orange fl">43</em>
                <font class="orange">元起</font>	
                <p>U盘可根据需求定制容量</p>
            </span>            
            <a href="活动详情-自定义.html" class="fl">立即定制</a>
        </div>        
        <ul>
        	<li>
            	<a href="活动详情-自定义.html">
                	<h3 class="n c6">卡片优盘4G</h3>
                    <p class="c9 s12">卡片式U盘，小巧便捷，携带方便</p>
                    <span class="orange"><font>35</font>元起</span>
                    <input type="button" value="立即定制">
                    <img src="images/made-img5.jpg" class="made-img-5">
                </a>
            </li>
           	<li>
            	<a href="活动详情-自定义.html">
                	<h3 class="n c6">卡片优盘4G</h3>
                    <p class="c9 s12">卡片式U盘，小巧便捷，携带方便</p>
                    <span class="orange"><font>35</font>元起</span>
                    <input type="button" value="立即定制">
                    <img src="images/made-img6.jpg" class="made-img-6">
                </a>
            </li>
        </ul>    	
    </div>
    <div class="made-list">
    	<h2 class="n s24 tc">定制专场，最科技范的企业礼品！</h2>
        <ul class="hiden">
        	<li>
            	<a href="活动详情-自定义.html">
                	<img src="photos/made-img8.jpg">
                    <h3 class="s20">卡片优盘4G</h3>
                    <p class="c9 t_hide">好看的智能手环 军用传感器，30天超长续航</p>
                    <p class="font2">定制价：<font>85</font>元起</p>
                    <input type="button" value="立即定购">
                </a>
            </li>
            <li>
            	<a href="活动详情-自定义.html">
                	<img src="photos/product-img-1.jpg">
                    <h3 class="s20">卡片优盘4G</h3>
                    <p class="c9 t_hide">好看的智能手环 军用传感器，30天超长续航</p>
                    <p class="font2">定制价：<font>85</font>元起</p>
                    <input type="button" value="立即定购">
                </a>
            </li>
            <li>
            	<a href="活动详情-自定义.html">
                	<img src="photos/product-img-2.jpg">
                    <h3 class="s20">卡片优盘4G</h3>
                    <p class="c9 t_hide">好看的智能手环 军用传感器，30天超长续航</p>
                    <p class="font2">定制价：<font>85</font>元起</p>
                    <input type="button" value="立即定购">
                </a>
            </li>
            <li>
            	<a href="活动详情-自定义.html">
                	<img src="photos/made-img8.jpg">
                    <h3 class="s20">卡片优盘4G</h3>
                    <p class="c9 t_hide">好看的智能手环 军用传感器，30天超长续航</p>
                    <p class="font2">定制价：<font>85</font>元起</p>
                    <input type="button" value="立即定购">
                </a>
            </li>
        </ul>
        <div class="made-service">定制内容或其他需求请<a href="">联系客服</a></div>
    </div>      

<!-- content end -->
@endsection