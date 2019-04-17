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
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            overflow: hidden;
        }
        .bl_nav,
        .bl_nav_write,
        .bl_nav_hr1,
        .bl_nav_hr2,
        .list-inline,
        .bl_banner_img,
        .bl_footer .row > div {
            position: absolute;
        }
        .bl_nav {
            background: url(./img/background.jpg) no-repeat;
            background-size: 100% 100%;
            height: 100%;
            width: 100%;
        }
        .bl_nav_write {
            font-size: 250%;
            color: white;
            top: 2%;
            left: 2%;
        }
        .bl_nav_write img {
            width: 80%;
        }
        .bl_nav_hr1,
        .bl_nav_hr2 {
            border: 2px solid white;
            top: 18%;
        }
        .bl_nav_hr2 {
            right: 0;
        }
        .bl_nav_ul_li {
            top: 16%;
            font-size: 22px;
            left: 25%;
        }
        .bl_nav_ul_li li a,
        .bl_nav_ul_li li a:focus {
            color: white;
        }
        .bl_nav_ul_li li a:hover {
            color: lightblue;
            text-decoration: none;
        }
        .bl_nav_ul_li > li{
            margin-left: 2%;
            color: white;
        }

        .bl_banner_img {
            top: 5%;
            left: 30%;
            height: 5%;
            line-height: 600px;
        }
        .bl_banner_img img {
            margin-left: 3%;
            width: 8%;
            border-radius: 50%;
            vertical-align: center;
        }
        /* .bl_banner_img img:nth-child(2) {
            width: 20%;
        }
        .bl_banner_img img:nth-child(1),
        .bl_banner_img img:nth-child(3) {
            width: 10%;
        } */
        /* footer */
        .bl_footer {
            display: none;
        }
        .bl_footer .row > div {
            bottom: 2%;
        }
        .bl_footer div div {
            font-size: 18px;
        }
        .bl_footer .row > div a,
        .bl_footer .row > div a:focus,
        .bl_footer .row > div a:hover {
            color: black;
            text-decoration: none;
        }
        .bl_footer .row > div a:hover {
            color: lightblue;
        }
        .bl_footer .row > div:nth-child(2) {
            left: 25%;
        }
        .bl_footer .row > div:nth-child(3) {
            left: 50%;
        }
        .bl_footer .row > div:nth-child(4) {
            left: 75%;
        }
    </style>
</head>
<body>
<!-- 导航栏 -->
<div class="container bl_nav" id="bl_nav">
    <div class="row">
        <div class="col-sm-5 bl_nav_write"><img src="./img/name.png"></div>
        <div>
            <div class="col-sm-3 bl_nav_hr1"></div>
            <div class="bl_nav_ul">
                <ul class="list-inline clearfix col-sm-8 bl_nav_ul_li">
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
banner
<div class="container-fluid bl_banner">
    <div class="row">
        <div class="col-sm-12 bl_banner_img">
            <a href="#"><img src="./img/grassplotSmall.png" /></a>
            <a href="#"><img src="./img/rice.png"/></a>
            <a href="#"><img src="./img/mallSmall.png" /></a>
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

<script type="text/javascript">
    $(function(){
        var nav = document.getElementById('bl_nav');
        $('.bl_banner_img').children("a").children("img").on("mouseenter",function() {
            $(this).animate({"width":"12%"},200);
        })
        $('.bl_banner_img').children("a").children("img").on("mouseleave",function() {
            $(this).animate({"width":"8%"},200);
        })
        nav.onmousewheel = function () {
            $(".bl_nav").animate({"height":"85%"},300,function() {
                $('.bl_footer').show(300);
            });
        }
    })
</script>
</body>
</html>
