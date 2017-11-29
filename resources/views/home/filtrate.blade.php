@extends('layouts.master')
@section('title','价格筛选')
@section('content')
<!-- content start -->

    <div class="sort2 hiden">
    	<a href="javascript:upDown()" id="updown" class="sort-down sort-this">价格</a>
        <a href="{{url('filtrate/newgoods')}}" class="sort-up">最新</a>
        <a href="#" class="sort-up">销量</a>
        <a href="javascript:void(0)" class="filter-btn">筛选条件</a>
    </div>
    <!--筛选start-->
    <form action="/search">
    <div class="filter-bg">
        <div class="con">
            <div class="filter-mask"></div>
            <div class="filter">
                <div class="filter-con">
                    <p class="c9">价格区间（元）</p>
                    <input type="text" placeholder="最低价" name="lowprice" value="{{$request->input('lowprice')}}"><b>&#8212;</b><input type="text" name="hightprice" value="{{$request->input('hightprice')}}" placeholder="最高价">
                </div>
                <div class="filter-con">
                    <p class="c9">定制数量</p>
                    <input type="text" name="numberL" value="{{$request->input('numberL')}}" placeholder="最低量"><b>&#8212;</b><input type="text" name="numberH" value="{{$request->input('numberH')}}" placeholder="最高量">
                </div>
                <div class="filter-con">
                    <p class="c9">全部分类</p>
                    <a href="" class="filter-select">全部</a><a href="">数码家电</a><a href="">皮具箱包</a><a href="">杯子茶具</a><a href="">文具本册</a><a href="">广告服装</a><a href="">创意促销</a><a href="">工艺礼品</a><a href="">家居家纺</a><a href="">运动健康</a><a href="">户外汽车</a><a href="">礼品套装</a>
                </div>
                <input  type="reset" value="重置" class="filter-reset"><input type="submit" value="完成" class="filter-finish">
            </div>
        </div>
    </div>
    </form>
    <!--筛选end-->
    <ul class="home-list hiden">
        @foreach($goods as $k=>$v)
    	<li>
        	<a href="/details/{{$v->id}}">
            	<img src="{{asset('/Uploads/product-img-1.jpg')}}">
                <h3 class="c6 s18">{{$v->name}}</h3>
                <p class="c9 t_hide">高端纯棉短袖圆领T高端纯棉短袖圆领T恤180克纯色恤180克纯色</p>
                <span id='price' class="font1 s18">{{$v->price}}</span>
            </a>
        </li>
        @endforeach
    </ul>
    <div class="fenye">
        <div id="pages">
            {{ $goods->links() }}
        </div>
    </div>
@endsection
<!-- content end -->

<!-- menu start -->

<!-- menu end -->
@section('script')
<script type="text/javascript">
    var countt = 1;
    var oupdown = document.getElementById('updown');
    function upDown() {
        if (countt % 2 == 0) {
            oupdown.onclick = paixu(1);

        } else {
            oupdown.onclick = paixu(0);

        }
        countt++;
    }

    function paixu(idx) {
        var oTr=document.getElementsByClassName('font1 s18');
        //降序
        if(idx==1){
            for (var i=0;i<oTr.length;i++) {
                for (var j = 0; j < oTr.length - 1 - i; j++) { ////每次一次都会比出最大的值，放到最后，然后第二次数组长度减去1，再循环比一次
                    if(Number(oTr[j].innerHTML)<Number(oTr[j+1].innerHTML)){
                        var t=oTr[j+1].parentNode.parentNode.innerHTML;
                        oTr[j+1].parentNode.parentNode.innerHTML=oTr[j].parentNode.parentNode.innerHTML;
                        oTr[j].parentNode.parentNode.innerHTML=t;
                    }
                }

            }
        }
        //升序
        else{
            for(var i=0; i<oTr.length;i++){
                for(var j=0;j<oTr.length-1-i;j++){
                    if(Number(oTr[j].innerHTML)>Number(oTr[j+1].innerHTML)){
                        var t=oTr[j].parentNode.parentNode.innerHTML;
                        oTr[j].parentNode.parentNode.innerHTML=oTr[j+1].parentNode.parentNode.innerHTML;
                        oTr[j+1].parentNode.parentNode.innerHTML=t;
                    }
                }
            }

        }
    }
    $(function () {
        var el = $('ul.pagination');
        el.prepend('<li><a href="/filtrate">首页</a></li>');
        el.children().children()[1].innerText = '上一页';
        el.children().last().children()[0].innerText = '下一页';
    });
        //分页显示效果
//        var elEach=el.children();
//        console.log(elEach.length);
//        //这里是加载省略号的flag
//        var pagingDivInnerHTML='';
//        var isHiddenExist=0;
//        function(){
//
//        }
//        for (var i=0; i < elEach.length; i++){
//            //如果是页首，中间页，页尾，当前页的前后三页则不省略。
//            if(i < 4 || i < (paging + 3) && i > (paging - 3) || i > (total / 2 - 2) && i < (total / 2 + 2) || i > (total - 3)){
//
//            }
//        }
//    });
</script>
@endsection
