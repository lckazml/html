@extends('layouts.admin')
@section('title','商品列表')
@section('content')
    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="/admin/goods">商品</a>
            <i class="icon-angle-right"></i>
        </li>
        <li><a href="#">商品列表</a></li>
    </ul>
    <div class="row-fluid sortable">
        <div class="box span12">
            <div class="box-header" data-original-title>
                <h2><i class="halflings-icon white list-alt"></i><span class="break"></span>商品列表</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <table class="table table-striped table-bordered bootstrap-datatable datatable">
                    <thead>
                    <tr>
                        <th>商品名称</th>
                        <th>商品价格</th>
                        <th>分类</th>
                        <th>上下架</th>
                        <th>存库</th>
                        <th>操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($goods as $k=>$v)
                    <tr>

                        <td class="center">{{$v->name}}</td>
                        <td class="center">{{$v->price}}</td>
                        <td class="center">{{$v->cate->name}}</td>
                        <td class="center">

                                @if($v->status==1)
                                    <span class="label label-success">上架</span>
                                @else
                                <span class="label label-false">下架</span>
                                    @endif

                        </td>
                        <td class="center">{{$v->repertory}}</td>
                        <td class="center">

                            <a class="btn btn-info" href="/admin/goods/{{$v->id}}/edit">
                                <i class="halflings-icon white edit"></i>
                            </a>
                            <a class="btn btn-danger" href="#">
                                <i class="halflings-icon white trash"></i>
                            </a>
                        </td>
                    </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div><!--/span-->

    </div><!--/row-->

@endsection