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
<body style="background: #97e0b8;">
<div class="container">
    <!-- top -->
    <div class="bl_top">
        <div class="row">
            <div class="bl_icon"><img src="./img/bl.png" height="90px" style="margin-top:10px;margin-left: 15px"></div>
            <div class="clearfix bl_top_word"><img src="./img/wh.png" alt="" /><a href="bl_contact#Feedback">意见反馈</a></div>
            <div class="clearfix bl_top_word"><img src="./img/person.png" alt="" /><a href="#">员工登录</a></div>
            <div class="clearfix bl_top_word"><img src="./img/ss.png" alt="" /><span class="bl_cx"><a href="#">查询更多</a></span><input type="" placeholder="请输入你想搜索的内容···" class="bl_cx_k clearfix"></div>
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
                <img src="{{ $posts[0]->img }}" class="ajax_company_img_1" style="width:1200px;margin-top: -360px;" />
                <div class="carousel-caption bl_company_banner_word ajax_company_word_1" >
                    <ul>
                        <li style="font-size: 40px;margin-bottom: 25px;">{{ $posts[0]->title }}</li>
                        <li style="font-size: 30px;margin-bottom: 10px;"></li>
                        <li style="font-size: 20px;line-height: 35px;font-weight: 100;">{{ $posts[0]->content }}</li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <img src="{{ $posts[1]->img }}" class="ajax_company_img_1" style="width:1200px;margin-top: -360px;" />
                <div class="carousel-caption bl_company_banner_word ajax_company_word_1" >
                    <ul>
                        <li style="font-size: 40px;margin-bottom: 25px;">{{ $posts[1]->title }}</li>
                        <li style="font-size: 30px;margin-bottom: 10px;"></li>
                        <li style="font-size: 20px;line-height: 35px;font-weight: 100;">{{ $posts[1]->content }}</li>
                    </ul>
                </div>
            </div>
            <div class="item">
                <img src="{{ $posts[2]->img }}" class="ajax_company_img_1" style="width:1200px;margin-top: -360px;" />
                <div class="carousel-caption bl_company_banner_word ajax_company_word_1" >
                    <ul>
                        <li style="font-size: 40px;margin-bottom: 25px;">{{ $posts[2]->title }}</li>
                        <li style="font-size: 30px;margin-bottom: 10px;"></li>
                        <li style="font-size: 20px;line-height: 35px;font-weight: 100;">{{ $posts[2]->content }}</li>
                    </ul>
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
                <div class="jq22-container" style="background: 6ae2ae;">
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
                            <div id="pagination-wrap">
                                <ul>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript" src="js/slide.js"></script>
            </div>
            <div>
                <ul style="margin-left: 50px;margin-top: 8px;">
                    <li>农业一直为生活创造绿色</li>
                    <li style="margin-left: 65px; color: white;">打造更美好的生态农业</li>
                    <li style="font-size: 20px; width:350px;margin-left: 140px;margin-top: 30px;font-weight: 200;line-height: 30px;">上海博露农业有限公司曾名为上海博露草坪有限公司。公司位于上海市奉贤区五四农场场中路333号，展草坪、水稻，积极发扬传承水稻农耕文化、草坪美观文化等。我们坚信用自己的双手，努力为城市农业多做贡献。</li>
                </ul>
            </div>
        </div>
        <div class="bl_company_wordAndP ">
            <div class="list-inline clearfix text-center">
                <span><img src="./img/company1.png" width="200px" /></span>
                <div>上海博露农业有限公司成立1992年12月。是上海率先成立，迄今国内最大的集草坪科研、生产、销售、建坪、养护、咨询服务为一体的草坪公司。历经20多年的发展…</div>
                <div class="bl_company_wordAndP_learnMore"><a href="article/1">Learn More ></a></div>
            </div>
            <div class="list-inline clearfix text-center">
                <span><img src="./img/company2.png" width="200px" /></span>
                <div>公司先后加入了国际草坪协会（ITS）、美国草坪生产者协会（TPI）、中国草坪学术委员会。进入企业发展新时期，博露将努力致力于水稻种植…</div>
                <div class="bl_company_wordAndP_learnMore"><a href="article/2">Learn More ></a></div>
            </div>
            <div class="list-inline clearfix text-center">
                <span><img src="./img/company3.png" width="200px"/></span>
                <div>为了给市民们展现良好生态环境，增强了大家保护环境的意识，为谱写“殷实农场”环境优美新篇章，进一步贯彻落实大色块项目建设出了一份力…</div>
                <div class="bl_company_wordAndP_learnMore clearfix"><a href="article/3">Learn More ></a></div>
            </div>
        </div>
        <div class="clearfix" style="float: left;margin-top: 80px; margin-bottom: 40px;">
            <img src="./img/pic.jpg" width="70%" />
            <div class="list-inline clearfix " style="position: absolute;bottom:90px;right:50px;width: 400px;height: 370px;
				box-shadow: rgba(0,0,0,.5) 0 0 20px;background: white;">
                <div style="font-weight: 600;margin: 15px 10px;color: #025600;">博露志愿</div>
                <div style="font-weight: 550;margin-left: 10px;">移栽紫云英，为千亩花海添彩</div>
                <div class="text-center" style="width:290px;margin:auto;margin-top: 10px;line-height: 35px;font-size: 18px;">清明节将至，五四农场将迎来扫墓、踏春高峰期，千亩花海即将迎来最佳观赏期。为了给市民们展现“花园五四”的良好生态环境，春播人手紧缺之际，公司特组织“博露田园色块及美化环境”志愿者小组开展紫云英移栽活动。</div>
                <div class="bl_company_wordAndP_learnMore1 clearfix"><a href="article/4">Learn More ></a></div>
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
<script type="text/javascript" src="./js/load.js"></script>
</body>
</html>
