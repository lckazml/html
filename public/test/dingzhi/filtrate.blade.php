<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0,user-scalable=no">
<meta name="format-detection" content="email=no,address=no,telephone=no">
<title>筛选产品</title>
<link rel="stylesheet" href="css/common.css">
<script src="js/jquery-1.12.1.min.js"></script>
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
<script src="js/hammer.min.js"></script>
<script src="js/common.js"></script>
</head>

<body>
<!-- header start -->
<header class="top">
	<div class="con">
		<a href="" class="top-menu">菜单</a>	    	
    	<a href="" class="top-car">购物车</a>
        <h1>爱尚礼品</h1>
    </div>
</header>
<!-- header end -->

<!-- content start -->
<section class="wrap">
    <div class="search hiden">
    	<input type="text" placeholder="请输入您想要的商品" class="search-text">
        <input type="button" class="search-btn">
    </div>     
    <div class="sort2 hiden">
    	<a href="" class="sort-down sort-this">价格</a>
        <a href="" class="sort-up">最新</a>
        <a href="" class="sort-up">销量</a>
        <a href="javascript:void(0)" class="filter-btn">筛选条件</a>
    </div>   
    <ul class="home-list hiden">
    	<li>
        	<a href="产品详情.html">
            	<img src="photos/product-img-1.jpg">
                <h3 class="c6 s18">移动电源</h3>
                <p class="c9 t_hide">高端纯棉短袖圆领T高端纯棉短袖圆领T恤180克纯色恤180克纯色</p>
                <span class="font1 s18">399元</span>
            </a>
        </li>
        <li>
        	<a href="产品详情.html">
            	<img src="photos/product-img-2.jpg">
                <h3 class="c6 s18">移动电源</h3>
                <p class="c9 t_hide">高端纯棉短袖圆领T高</p>
                <span class="font1 s18">399元</span>
            </a>
        </li>
        <li>
        	<a href="">
            	<img src="photos/product-img-1.jpg">
                <h3 class="c6 s18">移动电源</h3>
                <p class="c9 t_hide">高端纯棉短袖圆领T高端纯棉</p>
                <span class="font1 s18">399元</span>
            </a>
        </li>
        <li>
        	<a href="">
            	<img src="photos/product-img-2.jpg">
                <h3 class="c6 s18">移动电源</h3>
                <p class="c9 t_hide">高端纯棉短袖圆领T高</p>
                <span class="font1 s18">399元</span>
            </a>
        </li>
        <li>
        	<a href="">
            	<img src="photos/product-img-1.jpg">
                <h3 class="c6 s18">移动电源</h3>
                <p class="c9 t_hide">高端纯棉短袖圆领T高端纯棉</p>
                <span class="font1 s18">399元</span>
            </a>
        </li>
        <li>
        	<a href="">
            	<img src="photos/product-img-2.jpg">
                <h3 class="c6 s18">移动电源</h3>
                <p class="c9 t_hide">高端纯棉短袖圆领T高</p>
                <span class="font1 s18">399元</span>
            </a>
        </li>
        <li>
        	<a href="">
            	<img src="photos/product-img-1.jpg">
                <h3 class="c6 s18">移动电源</h3>
                <p class="c9 t_hide">高端纯棉短袖圆领T高端纯棉</p>
                <span class="font1 s18">399元</span>
            </a>
        </li>
        <li>
        	<a href="">
            	<img src="photos/product-img-2.jpg">
                <h3 class="c6 s18">移动电源</h3>
                <p class="c9 t_hide">高端纯棉短袖圆领T高</p>
                <span class="font1 s18">399元</span>
            </a>
        </li>
        <li>
        	<a href="">
            	<img src="photos/product-img-1.jpg">
                <h3 class="c6 s18">移动电源</h3>
                <p class="c9 t_hide">高端纯棉短袖圆领T高端纯棉</p>
                <span class="font1 s18">399元</span>
            </a>
        </li>
        <li>
        	<a href="">
            	<img src="photos/product-img-2.jpg">
                <h3 class="c6 s18">移动电源</h3>
                <p class="c9 t_hide">高端纯棉短袖圆领T高</p>
                <span class="font1 s18">399元</span>
            </a>
        </li>
    </ul>
    <a href=""><img src="images/foot-banner.jpg" class="foot-banner"></a>        
</section>
<!-- content end -->

<!-- menu start -->
<div class="menu">
	<ul class="con hiden">
    	<li class="menu-this"><a href="index.html" class="menu-1">首页</a></li>
        <li><a href="" class="menu-2">地图导航</a></li>
        <li><a href="" class="menu-3">信息咨询</a></li>
        <li><a href="" class="menu-4">电话咨询</a></li>
        <li><a href="" class="menu-5">会员中心</a></li>
    </ul>
</div>
<!-- menu end -->

<!--筛选start-->    
<div class="filter-bg">
	<div class="con">
    	<div class="filter-mask"></div>
    	<div class="filter">
    		<div class="filter-con">
            	<p class="c9">价格区间（元）</p>
                <input type="text" placeholder="最低价"><b>&#8212;</b><input type="text" placeholder="最高价">
            </div>
            <div class="filter-con">
            	<p class="c9">定制数量</p>
                <input type="text" placeholder="最低量"><b>&#8212;</b><input type="text" placeholder="最高量">
            </div>
            <div class="filter-con">
            	<p class="c9">全部分类</p>
                <a href="" class="filter-select">全部</a><a href="">数码家电</a><a href="">皮具箱包</a><a href="">杯子茶具</a><a href="">文具本册</a><a href="">广告服装</a><a href="">创意促销</a><a href="">工艺礼品</a><a href="">家居家纺</a><a href="">运动健康</a><a href="">户外汽车</a><a href="">礼品套装</a>
            </div>
            <input type="button" value="重置" class="filter-reset"><input type="button" value="完成" class="filter-finish">
    	</div>
    </div>
</div>
<!--筛选end--> 
</body>
</html>