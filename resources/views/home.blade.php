<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="./lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="./lib/html5shiv/html5shiv.min.js"></script>
    <script src="./lib/respond/respond.js"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css" href="./css/bl.css">
</head>
<body>
<div class="container">
    <!-- top -->
    <div class="bl_top">
        <div class="row">
            <div class="col-sm-7"><img src="./img/name.png" height="100px"></div>
            <div class="col-sm-1 bl_top_word" style="background: url("./img/all.jpg");">意见反馈</div>
        <div class="col-sm-1 bl_top_word">员工登录</div>
        <div class="col-sm-1 bl_top_word">查询更多</div>
    </div>
    <div class="bl_top_nav">
        <ul class="list-inline clearfix bl_top_ul">
            <li><a href="index.html" >首页</a></li>
            <li class="bl_company_js">公司简介</li>
            <li class="bl_EnterpriseDynamics_js">企业动态</li>
            <li class="bl_product_js">产品中心</li>
            <li class="bl_mall_js">博露商城</li>
            <li class="bl_contact_js">联系我们</li>
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

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
        <div class="item active">
            <img src="./img/product_banner.jpg" width="100%">
            <div class="carousel-caption bl_company_banner_word">
                啦啦啦啦啦啦啦啦啦
            </div>
        </div>
        <div class="item">
            <img src="./img/product_banner.jpg" width="100%">
            <div class="carousel-caption bl_company_banner_word">
                乐乐乐乐乐乐乐乐乐乐
            </div>
        </div>
        <div class="item">
            <img src="./img/product_banner.jpg" width="100%">
            <div class="carousel-caption bl_company_banner_word" >
                leleleelelelel
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
        <span class="sr-only">Next</span>
    </a>
</div>

<!-- 公司简介 -->
<div class="bl_company">
    <div class="bl_company_word text-center">
        <ul>
            <li>农业一直为生活创造绿色</li>
            <li>打造更美好的生态农业</li>
            <li>上海博露农业有限公司曾名为上海博露草坪有限公司。公司位于上海市奉贤区五四农场场中路333号，多年来，面向上海市区及南部杭州湾，依托地理优势，积极发展草坪、水稻，积极发扬传承水稻农耕文化、草坪美观文化等。我们坚信用自己的双手，努力为城市农业多做贡献。</li>
        </ul>
    </div>
    <div class="bl_company_wordAndP ">
        <div class="list-inline clearfix text-center">
            <span><img src="./img/company1.png" width="114px"></span>
            1992-至今
            <div></div>
            <div class="bl_company_wordAndP_learnMore">Learn More ></div>
        </div>
        <div class="list-inline clearfix text-center">
            <span><img src="./img/company2.png" width="114px"></span>
            企业资质
            <div></div>
            <div class="bl_company_wordAndP_learnMore">Learn More ></div>
        </div>
        <div class="list-inline clearfix text-center">
            <span><img src="./img/company3.png"></span>
            绿色博露
            <div></div>
        </div>
    </div>
    <div class="clearfix" style="float: left;margin-top: 80px;">
        <img src="./img/product_banner.jpg" width="75%" />
        <div class="list-inline clearfix text-center" style="position: absolute;bottom:100px;right:50px;width: 400px;height: 300px;border: 1px solid black;
				box-shadow: 2px 2px 2px 2px;background: white;">
            绿色博露
            <div></div>
        </div>
    </div>
</div>



<!-- 企业动态 -->
<div class="bl_EnterpriseDynamics">

</div>


<!-- 产品中心 -->
<div class="bl_product">
    <div class="text-center">
        <ul class="bl_product_ul list-inline clearfix">
            <li><img src="./img/bl_product_ul.png" width="70px" />博露大米</li>
            <li><img src="./img/bl_product_ul.png" width="70px"/>博露草坪</li>
            <li><img src="./img/bl_product_ul.png" width="70px"/>博露蔬果</li>
            <li><img src="./img/bl_product_ul.png" width="70px"/>其他</li>
        </ul>
    </div>

    <div class="bl_product_dami">
        <div>
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    大米季节
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" class="text-center">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    大米规格
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" class="text-center">
                    <li><a href="#">Action</a></li>
                    <li><a href="#">Another action</a></li>
                    <li><a href="#">Something else here</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#">Separated link</a></li>
                </ul>
            </div>

            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                    包装选择
                    <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" class="text-center">
                    <li><a href="#">精致牛皮袋装</a></li>
                    <li><a href="#">居家塑料袋装</a></li>
                    <li><a href="#">高档礼盒袋装</a></li>
                    <li><a href="#">文艺布袋袋装</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="#"></a></li>
                </ul>
            </div>
        </div>

    </div>
</div>

<!-- 博露商城 -->
<div class="bl_mall"></div>
<!-- 联系我们 -->
<div class="bl_contact">
    <div></div>
    <div>
        <ul>
            <li>联系我们</li>
            <li>Contact Us</li>
            <li>我们期待每个充满惊喜的明天，就像期待每个来自您的问候和建议，暴露认真对待每个为您服务的细节···</li>
        </ul>
    </div>
    <div class="text-center">
        <ul class="bl_product_ul list-inline clearfix bl_contact_ul">
            <li><img src="./img/bl_product_ul.png" width="70px" />联系公司</li>
            <li><img src="./img/bl_product_ul.png" width="70px"/>公司地址</li>
            <li><img src="./img/bl_product_ul.png" width="70px"/>意见反馈</li>
        </ul>
    </div>

    <div class="text-center bl_contact_company">
        <ul>
            <li>快来联系我们吧！</li>
            <li style="background: url(./img/all.jpg) no-repeat -70px -305px;"></li>
            <li style="background: url(./img/all.jpg) no-repeat -140px -305px;"></li>
            <li style="background: url(./img/all.jpg) no-repeat -210px -305px;"></li>
            <li style="background: url(./img/all.jpg) no-repeat -280px -305px;"></li>
        </ul>
    </div>

</div>
</div>
<!-- footer -->
<div class="container footerTop">
    <ul class="text-center">
        <li>想了解更多关于博露的信息？</li>
        <li>所有的员工都期待着与你分享博</li>
        <li>露文化的快乐</li>
    </ul>
</div>
<div class="container footerBottom footerTop text-center">
    <ul class="footerBottom_left clearfix">
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
<script src="./lib/jquery/jquery.min.js"></script>
<script src="./lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="./js/bl.js"></script>
</body>
</html>