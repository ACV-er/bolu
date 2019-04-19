<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>产品中心</title>
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
<body style="background: #d9eee5;">
<div class="container">
    <!-- top -->
    <div class="bl_top" style="background-color: #45b884">
        <div class="row">
            <div><img src="./img/bl.png" height="90px" style="margin-top:10px;margin-left: 15px"></div>
            <div class="clearfix bl_top_word"><img src="./img/wh.png" alt=""/>意见反馈</div>
            <div class="clearfix bl_top_word"><img src="./img/person.png" alt=""/>员工登录</div>
            <div class="clearfix bl_top_word"><img src="./img/ss.png" alt=""/>查询更多</div>
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
        $posts = postInfo(4, 3, "priority", "desc");
    @endphp
    <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <img src="{{ $posts[0]->img  }}"/>
                <div class="carousel-caption bl_company_banner_word ajax_company_1" >
                    {{ $post[0]->content }}
                </div>
            </div>
            <div class="item">
                <img src="{{ $posts[1]->img  }}"/>
                <div class="carousel-caption bl_company_banner_word ajax_company_2">
                    {{ $post[1]->content }}
                </div>
            </div>
            <div class="item">
                <img src="{{ $posts[2]->img  }}"/>
                <div class="carousel-caption bl_company_banner_word ajax_company_3">
                    {{ $post[2]->content }}
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


    <div class="bl_product" id="bl_product">
        <div class="text-center">
            <ul class="bl_product_ul list-inline clearfix">
                <li><img src="./img/bl_product_ul.png" width="70px"/>博露大米</li>
                <li><img src="./img/bl_product_ul.png" width="70px"/>博露草坪</li>
                <li><img src="./img/bl_product_ul.png" width="70px"/>博露蔬果</li>
                <li><img src="./img/bl_product_ul.png" width="70px"/>其他</li>
            </ul>
        </div>

        <div class="bl_product_dami">
            <div style="background: url(./img/bg2.jpg); background-size: 100% 100%;">
                <div>
                    <div class="dropdown bl_product_dami_left clearfix">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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

                    <div class="dropdown bl_product_dami_left clearfix">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                            大米规格
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" class="text-center">
                            <li><a href="#">Action</a></li>
                            <li><a href="#">Another </a></li>
                            <li><a href="#">Somethin</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#">Separated link</a></li>
                        </ul>
                    </div>

                    <div class="dropdown bl_product_dami_left clearfix">
                        <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
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

            <div class="bl_product_dami_right">
                <ul class="text-center">
                    <li>博露大米</li>
                    <li>
                        好啊号好啊后哦啊哈后好好好哦哈后哦哈哈啊达瓦达瓦达瓦达瓦好啊号好啊后哦啊哈后好好好哦哈后哦哈哈啊达瓦达瓦达瓦达瓦好啊号好啊后哦啊哈后好好好哦哈后哦哈哈啊达瓦达瓦达瓦达瓦好啊号好啊后哦啊哈后好好好哦哈后哦哈哈啊达瓦达瓦达瓦达瓦
                    </li>
                </ul>
                <ul>
                    <li>
                        <div class="clearfix">
                            <img src="./img/wxgzh.png">
                            <div>
                                <div>复古布袋单调文艺</div>
                                <div>规格 1Kg/袋</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="clearfix">
                            <img src="./img/wxgzh.png">
                            <div>
                                <div>复古布袋单调文艺</div>
                                <div>规格 1Kg/袋</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="clearfix">
                            <img src="./img/wxgzh.png">
                            <div>
                                <div>复古布袋单调文艺</div>
                                <div>规格 1Kg/袋</div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="clearfix">
                            <img src="./img/wxgzh.png">
                            <div>
                                <div>复古布袋单调文艺</div>
                                <div>规格 1Kg/袋</div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>

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
</body>
</html>

