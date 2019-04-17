<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>博露官网</title>
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
            <div class="clearfix bl_top_word"><img src="./img/wh.png" alt="" />意见反馈</div>
            <div class="clearfix bl_top_word"><img src="./img/person.png" alt="" />员工登录</div>
            <div class="clearfix bl_top_word"><img src="./img/ss.png" alt="" /><span class="bl_cx">查询更多</span><input type="" placeholder="请输入你想搜索的内容···" class="bl_cx_k clearfix"></div>
        </div>
        <div class="bl_top_nav">
            <ul class="list-inline clearfix bl_top_ul">
                <li><a href="/" >首页</a></li>
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
            $posts = postInfo(1, 3, "priority", "desc");
        @endphp
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ $posts[0]->img  }}"/>
                <div class="carousel-caption bl_company_banner_word ajax_company_1" >

                </div>
            </div>
            <div class="item">
                <img src="{{ $posts[1]->img  }}"/>
                <div class="carousel-caption bl_company_banner_word ajax_company_2">

                </div>
            </div>
            <div class="item">
                <img src="{{ $posts[2]->img  }}"/>
                <div class="carousel-caption bl_company_banner_word ajax_company_3">

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

    <!-- 公司简介 -->
    <div class="bl_company" id="bl_company">
        <div class="bl_company_word text-center clearfix">
            <div>
                <div class="jq22-container">
                    <div id="wrapper">
                        <div id="slider-wrap" >
                            <ul id="slider">
                                @php
                                    $posts = postInfo(2, 5, "priority", "desc");
                                    foreach ($posts as $post) {
                                        echo "<li class=\"fa-img\"><img src=\"$post->img\" class=\"fa fa-image fa_img\"/></li>";
                                    }
                                @endphp
                            </ul>
                            <!--controls-->
                            <div class="btns" id="next"><i class="fa fa-arrow-right"></i></div>
                            <div class="btns" id="previous"><i class="fa fa-arrow-left"></i></div>
                            <div id="counter"></div>

                            <div id="pagination-wrap">
                                <ul>
                                </ul>
                            </div>
                            <!--controls-->
                        </div>
                    </div>
                </div>
                <script type="text/javascript" src="js/slide.js"></script>
            </div>
            <div>
                <ul style="margin-left: 50px;margin-top: 8px;">
                    <li>农业一直为生活创造绿色</li>
                    <li style="margin-left: 65px;">打造更美好的生态农业</li>
                    <li style="font-size: 20px; width:350px;margin-left: 140px;margin-top: 30px;">上海博露农业有限公司曾名为上海博露草坪有限公司。公司位于上海市奉贤区五四农场场中路333号，多年来，面向上海市区及南部杭州湾，依托地理优势，积极发展草坪、水稻，积极发扬传承水稻农耕文化、草坪美观文化等。我们坚信用自己的双手，努力为城市农业多做贡献。</li>
                </ul>
            </div>
        </div>
        <div class="bl_company_wordAndP ">
            <div class="list-inline clearfix text-center">
                <span><img src="./img/company1.png" width="120px" /></span>
                1992-至今
                <div>上海博露农业有限公司曾名为上海博露草坪有限公司。公司位于上海市奉贤区五四农场场中路333号，展草坪、水稻，积极发扬传承水稻农耕文化、草坪美观文化等。我们坚信用自己的双手，努力为城市农业多做贡献。</div>
                <div class="bl_company_wordAndP_learnMore"><a href="article">Learn More ></a></div>
            </div>
            <div class="list-inline clearfix text-center">
                <span><img src="./img/company2.png" width="114px" /></span>
                企业资质
                <div>上海博露农业有限公司曾名为上海博露草坪有限公司。公司位于上海路333号，多年来，面向上海市区及南部杭州湾，依托地理优势水稻农耕文化、草坪美观文化等。我们坚信用自己的双手，努力为城市农业多做贡献。</div>
                <div class="bl_company_wordAndP_learnMore"><a href="article">Learn More ></a></div>
            </div>
            <div class="list-inline clearfix text-center">
                <span><img src="./img/company3.png" /></span>
                绿色博露
                <div>上海博露农业有限公司曾名为上海博露草坪有限公司。公司位于上海市，积极发展草坪、水稻，积极发扬传承水稻农耕文化、草坪美观文化等。我们坚信用自己的双手，努力为城市农业多做贡献。</div>
                <div class="bl_company_wordAndP_learnMore clearfix"><a href="article">Learn More ></a></div>
            </div>
        </div>
        <div class="clearfix" style="float: left;margin-top: 80px; margin-bottom: 40px;">
            <img src="./img/pic.jpg" width="70%" />
            <div class="list-inline clearfix " style="position: absolute;bottom:90px;right:50px;width: 400px;height: 370px;
				box-shadow: rgba(0,0,0,.5) 0 0 20px;background: white;">
                <div style="font-weight: 600;margin: 15px 10px;color: #025600;">绿色博露</div>
                <div style="font-weight: 550;margin-left: 10px;">上海博露农业有限公限公司</div>
                <div class="text-center" style="width:300px;margin:auto;margin-top: 10px;line-height: 35px;">公司位于上海市奉贤区五四农场场中路333号，多年来，面向上海市区及南部杭州湾，依托地理优势，积极发展草坪、水稻，积极发扬传承水稻农耕文化、草坪美观文化等。我们坚信用自己的双手，努力为城市农业多做贡献。</div>
            </div>
        </div>
    </div>
    <!-- 博露商城 -->
    <div class="bl_mall"></div>
    <!-- 联系我们 -->
</div>
<!-- footer -->
<div class="container footerBottom footerTop text-center">
    <ul class="clearfix">
        <li>联系公司</li>
        <li>Follow Us</li>
        <li><img src="./img/bl_bottomLeft.png" width="80%" /></li>
    </ul>
    <ul class="footerBottom_center clearfix">
        <li><a href="https://map.baidu.com/poi/%E4%B8%8A%E6%B5%B7%E5%8D%9A%E9%9C%B2%E5%86%9C%E4%B8%9A%E6%9C%89%E9%99%90%E5%85%AC%E5%8F%B8/@13551721.272409003,3593395.3294599773,14.73z?uid=6ee0102084ab5fee52e5c53c&primaryUid=6ee0102084ab5fee52e5c53c&ugc_type=3&ugc_ver=1&device_ratio=1&compat=1&querytype=detailConInfo&da_src=shareurl" target="_blank">公司地址</a></li>
        <li>Company Address</li>
        <li><img src="./img/bl_bottomCenter.png" />百度地图</li>
    </ul>
    <ul class="footerBottom_right clearfix">
        <li>友情链接</li>
        <li>Friendly Connection</li>
        <li><img src="./img/bl_bottomRight.png" width="80%" /></li>
    </ul>
</div>
</body>
</html>
