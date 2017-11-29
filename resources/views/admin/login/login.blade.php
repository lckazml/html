<!DOCTYPE html>
<html lang="en">
<head>

    <!-- start: Meta -->
    <meta charset="utf-8">
    <title>Bootstrap Metro Dashboard by Dennis Ji for ARM demo</title>
    <meta name="description" content="Bootstrap Metro Dashboard">
    <meta name="author" content="Dennis Ji">
    <meta name="keyword" content="Metro, Metro UI, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
    <!-- end: Meta -->

    <!-- start: Mobile Specific -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- end: Mobile Specific -->

    <!-- start: CSS -->
    <link id="bootstrap-style" href="{{asset('Admin/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('Admin/css/bootstrap-responsive.min.css')}}" rel="stylesheet">
    <link id="base-style" href="{{asset('Admin/css/style.css')}}" rel="stylesheet">
    <link id="base-style-responsive" href="{{asset('Admin/css/style-responsive.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&subset=latin,cyrillic-ext,latin-ext' rel='stylesheet' type='text/css'>
    <!-- end: CSS -->


    <!-- The HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <link id="ie-style" href="{{asset('Admin/css/ie.css')}}" rel="stylesheet">
    <![endif]-->

    <!--[if IE 9]>
    <link id="ie9style" href="{{asset('Admin/css/ie9.css')}}" rel="stylesheet">
    <![endif]-->

    <!-- start: Favicon -->
    <link rel="shortcut icon" href="{{asset('Admin/img/favicon.ico')}}">
    <!-- end: Favicon -->

    <style type="text/css">
        body { background: url({{asset('Admin/img/bg-login.jpg')}}) !important; }
    </style>



</head>

<body>
<div class="container-fluid-full">
    <div class="row-fluid">

        <div class="row-fluid">
            <div class="login-box">
                <div class="icons">
                    <a href="/"><i class="halflings-icon home"></i></a>
                    <a href="#"><i class="halflings-icon cog"></i></a>
                </div>
                <h2>后台登陆</h2>
                <form class="form-horizontal" id="myform" action="/admin/login"  method="post">
                    <fieldset>

                        <div class="input-prepend" title="Username">
                            <span class="add-on"><i class="halflings-icon user"></i></span>
                            <input class="input-large span10" name="username" id="username" type="text" placeholder="用户名"/>
                        </div>
                        <div class="clearfix"></div>

                        <div class="input-prepend" title="Password">
                            <span class="add-on"><i class="halflings-icon lock"></i></span>
                            <input class="input-large span10" name="password" id="password" type="password" placeholder="密码"/>
                        </div>
                        <div class="clearfix"></div>

                        <label class="remember" for="remember"><input type="checkbox" id="remember" />记住密码</label>

                        <div class="button-login">
                            <a  class="btn btn-primary" href="javascript:next()">登陆</a>
                        </div>
                        <div class="clearfix"></div>
                    {{csrf_field()}}
                </form>

            </div><!--/span-->
        </div><!--/row-->


    </div><!--/.fluid-container-->

</div><!--/fluid-row-->
<div class="common-modal modal fade" id="common-Modal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <ul class="list-inline item-details">
            <li><a href="#">Admin templates</a></li>
            <li><a href="http://themescloud.org">Bootstrap themes</a></li>
        </ul>
    </div>
</div>
<!-- start: JavaScript-->

<script src="{{asset('Admin/js/jquery-1.9.1.min.js')}}"></script>
<script src="{{asset('Admin/js/jquery-migrate-1.0.0.min.js')}}"></script>

<script src="{{asset('Admin/js/jquery-ui-1.10.0.custom.min.js')}}"></script>

<script src="{{asset('Admin/js/jquery.ui.touch-punch.js')}}"></script>

<script src="{{asset('Admin/js/modernizr.js')}}"></script>

<script src="{{asset('Admin/js/bootstrap.min.js')}}"></script>

<script src="{{asset('Admin/js/jquery.cookie.js')}}"></script>

<script src='{{asset('Admin/js/fullcalendar.min.js')}}'></script>

<script src='{{asset('Admin/js/jquery.dataTables.min.js')}}'></script>

<script src="{{asset('Admin/js/excanvas.js')}}"></script>
<script src="{{asset('Admin/js/jquery.flot.js')}}"></script>
<script src="{{asset('Admin/js/jquery.flot.pie.js')}}"></script>
<script src="{{asset('Admin/js/jquery.flot.stack.js')}}"></script>
<script src="{{asset('Admin/js/jquery.flot.resize.min.js')}}"></script>

<script src="{{asset('Admin/js/jquery.chosen.min.js')}}"></script>

<script src="{{asset('Admin/js/jquery.uniform.min.js')}}"></script>

<script src="{{asset('Admin/js/jquery.cleditor.min.js')}}"></script>

<script src="{{asset('Admin/js/jquery.noty.js')}}"></script>

<script src="{{asset('Admin/js/jquery.elfinder.min.js')}}"></script>

<script src="{{asset('Admin/js/jquery.raty.min.js')}}"></script>

<script src="{{asset('Admin/js/jquery.iphone.toggle.js')}}"></script>

<script src="{{asset('Admin/js/jquery.uploadify-3.1.min.js')}}"></script>

<script src="{{asset('Admin/js/jquery.gritter.min.js')}}"></script>

<script src="{{asset('Admin/js/jquery.imagesloaded.js')}}"></script>

<script src="{{asset('Admin/js/jquery.masonry.min.js')}}"></script>

<script src="{{asset('Admin/js/jquery.knob.modified.js')}}"></script>

<script src="{{asset('Admin/js/jquery.sparkline.min.js')}}"></script>

<script src="{{asset('Admin/js/counter.js')}}"></script>

<script src="{{asset('Admin/js/retina.js')}}"></script>

<script src="{{asset('Admin/js/custom.js')}}"></script>
<script type="text/javascript">
    function next(){
        if(document.getElementById('username').value==""){
            alert("请输入用户名!");
            return false;
        }
        if(document.getElementById('password').value==""){
            alert("请输入密码!");
            return false;
        }
        document.getElementById('myform').submit();
    }
</script>
<!-- end: JavaScript-->

</body>
</html>
