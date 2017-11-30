@extends('layouts.admin')
@section('title','添加商品')
@section('content')

    <ul class="breadcrumb">
        <li>
            <i class="icon-home"></i>
            <a href="/admin/goods">商品</a>
            <i class="icon-angle-right"></i>
        </li>
        <li>
            <i class="icon-edit"></i>
            <a href="/admin/goods/create">添加商品</a>
        </li>
    </ul>
    <div class="row-fluid sortable ui-sortable">
        <div class="box span12">
            <div class="box-header" data-original-title="">
                <h2><i class="halflings-icon white edit"></i><span class="break"></span>添加商品</h2>
                <div class="box-icon">
                    <a href="#" class="btn-setting"><i class="halflings-icon white wrench"></i></a>
                    <a href="#" class="btn-minimize"><i class="halflings-icon white chevron-up"></i></a>
                    <a href="#" class="btn-close"><i class="halflings-icon white remove"></i></a>
                </div>
            </div>
            <div class="box-content">
                <form class="form-horizontal" id="myform" action="/admin/goods"  method="post" enctype="multipart/form-data" >

                    <fieldset>
                        <div class="control-group">
                            <label class="control-label" for="typeahead">商品名称 </label>
                            <div class="controls">
                                <input type="text" class="span6 typeahead" id="typeahead" data-provide="typeahead" name="goodsname" data-items="4" ><span style="color: red;">*</span>

                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="selectError3">商品分类</label>
                            <div class="controls">
                                <select name='cate' id="selectError3">
                                    <option value="0">请选择</option>
                                    @foreach($cates as $k => $v)
                                    <option  value="{{$v->id}}">{{$v->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>



                        <div class="control-group">
                            <label class="control-label">商品图片</label>
                            <div class="controls">
                                    <input type="file" id="img" name="img">
                            </div>
                        </div>

                        <div class="control-group">
                            <label class="control-label" for="focusedInput">本店售价</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="localsale" name="localsale" type="text" value="0">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">市场售价</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="marksale" name="marksale" type="text" value="0">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label" for="focusedInput">库存</label>
                            <div class="controls">
                                <input class="input-xlarge focused" id="repertory" name="repertory" type="text" value="0">
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">是否上架</label>
                            <div class="controls">
                                <label class="radio">
                                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked="checked">
                                   是

                                </label>

                                <label class="radio" style="padding: 5px 0 0 0;">
                                    <input style="top-padding:5px; " type="radio" name="optionsRadios" id="optionsRadios1" value="0" checked="">否
                                    </label>


                            </div>

                        </div>
                        <div class="control-group" style="padding-left: 25px;">
                            <label class="control-label"  for="focusedInput" ><input type="checkbox" value="1" name="is_promote" onclick="if($(this).prop('checked')){$('.promote_price').removeAttr('disabled');}else{$('.promote_price').attr('disabled','disabled');}">
                                促销价：</label>
                            <input type="text" disabled="disabled"  class="promote_price" name="promote_price">
                        </div>
                        <div class="control-group">
                            <label class="control-label">加入推荐</label>
                            <div class="controls">
                                <label class="checkbox inline">
                                    <div class="checker" id="uniform-inlineCheckbox1"><span class="checked"><input type="checkbox" id="inlineCheckbox1" name="is_best" value="1"></span></div> 精品
                                </label>
                                <label class="checkbox inline">
                                    <div class="checker" id="uniform-inlineCheckbox2"><span class="checked"><input type="checkbox" id="inlineCheckbox2" name="is_new" value="1"></span></div> 新品
                                </label>
                                <label class="checkbox inline">
                                    <div class="checker" id="uniform-inlineCheckbox3"><span class="checked"><input type="checkbox" id="inlineCheckbox3" name="is_hot" value="1"></span></div> 热销
                                </label>
                            </div>
                        </div>


                        <div class="control-group hidden-phone">
                            <label class="control-label" for="textarea2">商品描述</label>
                            <div class="controls">
                                <textarea class="cleditor" id="textarea2" name="goodsdetails" rows="3"></textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <button type="submit" class="btn btn-primary">提   交</button>
                            <button type="reset" class="btn">取 消</button>
                        </div>
                    </fieldset>
                </form>

            </div>
        </div><!--/span-->

    </div>
    @endsection
@section('script')
    <script>
        (function (){
            var form=document.getElementById('myform');
            function next(event) {
                if (document.getElementById('typeahead').value==""){
                    alert('商品名不能为空');
                    document.getElementById('typeahead').focus();
                    event.preventDefault();
                    return false;
                }
                if (document.getElementById('img').value==""){
                    alert('上传图片不能为空');
                    event.preventDefault();
                    return false;
                }
                if (document.getElementById('localsale').value=="0"){
                    alert('商品售价不能为0');
                    document.getElementById('localsale').focus();
                    event.preventDefault();
                    return false;
                }
                var regular=/^([1-9]{1})\d/;
                if(!regular.test(document.getElementById('localsale').value)){
                    alert('商品售价只能为数字');
                    document.getElementById('localsale').focus()
                    event.preventDefault();
                    return false;
                }
                if (document.getElementById('marksale').value=="0"){
                    alert('市场售价不能0');
                    document.getElementById('marksale').focus();
                    event.preventDefault();
                    return false;

                }
                if (document.getElementById('repertory').value=="0"){
                    alert('库存不能为空0');
                    document.getElementById('repertory').focus();
                    event.preventDefault();
                    return false;
                }
                if (document.getElementById('textarea2').value==""){
                    alert('请对商品进行描述');
                    document.getElementById('textarea2').focus();
                    event.preventDefault();
                    return false;
                }
            }
            form.addEventListener('submit',next,false);
            /*
            img 图片
             localsale 本店售价
             marksale 市场售价
             repertory 库存
             textarea2 商品描述
            */
        }());
    </script>

    @endsection