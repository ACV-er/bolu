<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>企业动态</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="./lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="./lib/html5shiv/html5shiv.min.js"></script>
    <script src="./lib/respond/respond.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="./css/bl.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="./js/bl.js"></script>
    <script type="text/javascript" src="./js/demo.js"></script>
</head>
<body style="background: url(./img/bg.jpg) no-repeat; background-size:100% 100%;">
<div class="container">
    <!-- top -->
    <div class="bl_top">
        <div class="row">
            <div class="bl_icon"><img src="./img/bl.png" height="90px" style="margin-top:10px;margin-left: 15px"></div>
            <div class="clearfix bl_top_word"><img src="./img/wh.png" alt=""/><a
                    href="bl_contact#Feedback">意见反馈</a></div>
            <div class="clearfix bl_top_word"><img src="./img/person.png" alt=""/><a href="#">员工登录</a></div>
            <div class="clearfix bl_top_word"><img src="./img/ss.png" alt=""/><span class="bl_cx"><a
                        href="#">查询更多</a></span><input type="" placeholder="请输入你想搜索的内容···" class="bl_cx_k clearfix">
            </div>
        </div>
        <div class="bl_top_nav">
            <ul class="list-inline clearfix bl_top_ul">
                <li><a href="/">首页</a></li>
                <li class="bl_company_js"><a href="bl">公司简介</a></li>
                <li class="bl_EnterpriseDynamics_js"><a href="bl_EnterpriseDynamics">企业动态</a></li>
                <li class="bl_product_js"><a href="bl_product">产品中心</a></li>
                <li class="bl_mall_js"><a href="?page=4">博露商城</a></li>
                <li class="bl_contact_js"><a href="bl_contact">联系我们</a></li>
            </ul>
        </div>
    </div>
    <div id="carousel-example-generic" class="carousel slide bl_lb" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>

    @php
        $posts = postInfo(3, 3, "priority", "desc");
    @endphp
    <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ $posts[0]->img  }}"/>
                <div class="carousel-caption bl_company_banner_word ajax_company_1">
                    {{ $posts[0]->content }}
                </div>
            </div>
            <div class="item">
                <img src="{{ $posts[1]->img  }}"/>
                <div class="carousel-caption bl_company_banner_word ajax_company_2">
                    {{ $posts[1]->content }}
                </div>
            </div>
            <div class="item">
                <img src="{{ $posts[2]->img  }}"/>
                <div class="carousel-caption bl_company_banner_word ajax_company_3">
                    {{ $posts[2]->content }}
                </div>
            </div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">
			    </span>
        </a>
    </div>

    <div class="bl_EnterpriseDynamics" id="bl_EnterpriseDynamics">
        <script src="./js/jquery.SuperSlide.2.1.3.js"></script>
        <div class="picScroll-left">
            <div class="bd">
                <ul class="picList text-center">
                    @php
                        $posts = postInfo(0, 6, "priority", "desc");
                        foreach ($posts as $post) {
                        echo "<li><div class=\"pic\"><a href=\"". env('APP_URL') ."/article/$post->id\" target=\"_blank\"><img src=\"$post->img\" /></a></div>".
                        "<div class=\"title\"><a href=\"". env('APP_URL') ."/article/$post->id\" target=\"_blank\">$post->title</a></div>".
                        "<div style=\"width: 200px;word-wrap : break-word;height: 90px;margin: 0px 0px 0px 50px;\">$post->content</div></li>";
                }
                    @endphp
                </ul>
            </div>
            <div class="hd">
                <a class="next">></a>
                <ul></ul>
                <a class="prev"><</a>
            </div>
        </div>


    </div>


    <div class="container footerBottom footerTop text-center">
        <ul class="clearfix">
            <li>联系公司</li>
            <li>Follow Us</li>
            <li><img src="./img/bl_bottomLeft.png" width="80%"/></li>
        </ul>
        <ul class="footerBottom_center clearfix">
            <li>
                <a href="https://map.baidu.com/poi/%E4%B8%8A%E6%B5%B7%E5%8D%9A%E9%9C%B2%E5%86%9C%E4%B8%9A%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8/@13551721.272409003,3593395.3294599773,14.73z?uid=6ee0102084ab5fee52e5c53c&primaryUid=6ee0102084ab5fee52e5c53c&ugc_type=3&ugc_ver=1&device_ratio=1&compat=1&querytype=detailConInfo&da_src=shareurl"
                   target="_blank">公司地址</a></li>
            <li>Company Address</li>
            <li><img src="./img/bl_bottomCenter.png"/>百度地图</li>
        </ul>
        <ul class="footerBottom_right clearfix">
            <li>友情链接</li>
            <li>Friendly Connection</li>
            <li><img src="./img/bl_bottomRight.png" width="80%"/></li>
        </ul>
    </div>
    <script type="text/javascript">
        $(function () {
            jQuery(".picScroll-left").slide({
                titCell: ".hd ul",
                mainCell: ".bd ul",
                autoPage: true,
                effect: "left",
                autoPlay: true,
                vis: 3,
                trigger: "click"
            });
        })

    </script>
    <script type="text/javascript" src="./js/load.js"></script>
</body>
</html>
