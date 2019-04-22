<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <link href="./lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="./lib/html5shiv/html5shiv.min.js"></script>
    <script src="./lib/respond/respond.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="./css/index.css">
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/fullplay.js"></script>
</head>
<body>
<div id="bodyBox">
    <div id="bodyPage">
        <img src="./img/background.jpg" class="bg">
        <img src="./img/bg2.png" class="bg">
        <img src="./img/bg3.png" class="bg">
    </div>
    <!-- 导航栏 -->
    <div class="container bl_nav" id="bl_nav">
        <div class="row">
            <div class="col-sm-5 bl_nav_write"><img src="./img/name.png"></div>
            <div>
                <div class="col-sm-3 bl_nav_hr1"></div>
                <div class="bl_nav_ul ">
                    <ul class="list-inline clearfix col-sm-12 bl_nav_ul_li text-center">
                        <li><a href="/">首页</a></li>
                        <li><a href="./bl">公司简介</a></li>
                        <li><a href="./bl_EnterpriseDynamics">企业动态</a></li>
                        <li><a href="./bl_product">产品中心</a></li>
                        <li><a href="./bl?page=4">博露商城</a></li>
                        <li><a href="./bl_contact" id="bl_c">联系我们</a></li>
                    </ul>
                </div>
                <div class="col-sm-3 bl_nav_hr2"></div>
            </div>
        </div>
    </div>
    <!-- banner -->
    <div class="container-fluid bl_banner">
        <div class="row">
            <ul class="text-center list-inline bl_banner_ul">
                <li>水稻</li>
                <li>水稻</li>
                <li>水稻</li>
            </ul>
        </div>
        <div class="row">
            <div class="col-sm-12 bl_banner_img">
                <a href="#"><img src="./img/rice.png" index="0" /></a>
                <a href="#"><img src="./img/rice.png" index="1"/></a>
                <a href="#"><img src="./img/rice.png" index="2"/></a>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="container-fluid bl_footer">
        <div class="row">
            <div class="col-sm-3"><a href="#"><p class="text-center">联系公司</p>
                    <p class="text-center">Contact Company</p></a></div>
            <div class="col-sm-3"><a href="#"><p class="text-center">公司地址</p>
                    <p class="text-center">Company Address</p></a></div>
            <div class="col-sm-3"><a href="#"><p class="text-center">意见反馈</p>
                    <p class="text-center">Feedback</p></a></div>
            <div class="col-sm-3"><a href="#"><p class="text-center">友情链接</p>
                    <p class="text-center">Friendship Link</p></a></div>
        </div>
    </div>

</div>


<script type="text/javascript">
    $(function(){
        var nav = document.getElementById('bl_nav');
        $('.bl_banner_img a img').on("mouseenter",function() {
            $(this).animate({"width":"12%"},300);
            var index = $(this).parent().index();
            $('.bl_banner_ul li').eq(index).show(300);
        })
        $('.bl_banner_img a img').on("mouseleave",function() {
            $(this).animate({"width":"8%"},300);
            var index = $(this).parent().index();
            $('.bl_banner_ul li').eq(index).hide(300);
        })
        nav.onmousewheel = function () {
            $(".bl_nav").animate({"height":"85%"},300,function() {
                $('.bl_footer').show(300);
            });
        };
    })
</script>
<script type="text/javascript" src="./js/load.js"></script>
<script type="text/javascript">
    $(document).ready(function(e) {

        $("#bodyPage").fullImages({
            ImgWidth: 1920,
            ImgHeight: 980,
            autoplay :  3500,
            fadeTime : 1500
        });

    });
</script>
</body>
</html>
