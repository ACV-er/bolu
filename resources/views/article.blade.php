<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>文章</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link href="./lib/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="./lib/html5shiv/html5shiv.min.js"></script>
    <script src="./lib/respond/respond.js"></script>
    <![endif]-->
    <script src="./lib/jquery/jquery.min.js"></script>
    <script src="./lib/bootstrap/js/bootstrap.min.js"></script>
    <style type="text/css">
        body {
            background-color: #f6fcf9;
        }
        a,
        a:hover,
        a:focus {
            text-decoration: none;
            color: black;
        }
        ul,li{
            list-style: none;
        }
        .container {
            width: 1200px !important;
            position: relative;
            background-color: #f6fcf9;
            padding: 0px;
        }
        .container > div:nth-child(2) {
            border-bottom: 1px solid black;
            width:100%;
        }
        .article_top ul {
            font-size: 20px;
            margin-top: 20px;
            margin-left: 150px;
            height: 65px;
            line-height: 65px;
            border-left: 1px solid black;

        }
        .article_top ul li {
            margin-left: 10px;
        }
        .article_top ul li a{
            font-weight: 600;
        }
        .article_top ul li:nth-child(n+6) {
            margin: 0px;
            padding: 0px;
        }
        .article_center > div:nth-child(1){
            width: 850px;
            height: 1200px;
            float: left;
            padding: 0 150px;
            font-size: 18px;
        }
        .article_center > div:nth-child(1) ul img {
            width: 510px;
            margin: 40px 0px;
        }
        .article_center > div:nth-child(1) ul li:nth-child(n+5) {
            padding-right: 30px;
        }
        .article_center > div:nth-child(1) ul li:nth-child(1) {
            font-size: 18px;
            margin-top: 50px;
        }
        .article_center > div:nth-child(1) ul li:nth-child(2) {
            width: 450px;
            font-size: 25px;
            margin-top: 10px;
        }
        .article_center > div:nth-child(1) ul li:nth-child(5) {
            margin-bottom: 20px;
        }
        .article_center > div:nth-child(2) {
            width: 350px;
            height: 1200px;
            background-color: #def3ea;
            float: right;
            padding-top: 20px;
        }
        .article_center > div:nth-child(2) ul{
            padding-left: 20px;
            font-size: 25px;
        }
        .article_center > div:nth-child(2) ul li,
        .article_center > div:nth-child(2) ul img {
            width: 310px;
            height: 200px;
        }
        .article_center > div:nth-child(2) ul li:nth-child(2n) {
            padding-top: 50px;
        }
        .footerTop ul {
            font-size: 20px;
            list-style: none;
        }
        .footerTop ul li:nth-child(1) {
            font-size: 25px;
            color: green;
        }
        .footerBottom {
            background-color: #d2e6dd;
            height: 200px;
            margin-bottom: 0px;
        }
        .footerBottom ul {
            float: left;
            margin-left: 120px;
            font-weight: 360;
            margin-top: 40px;
        }
        .footerBottom ul li:nth-child(1) {
            cursor: pointer;
        }
        .footerBottom li a,
        .footerBottom li a:focus {
            color: green;
        }
        .footerBottom li a:hover {
            color: blue;
            text-decoration: none;
        }
    </style>
</head>
<body>
<div class="container">
    <div class="article_top">
        <ul class="list-inline clearfix">
            <li><a href="/">首页</a></li>
            <li><a href="bl">公司简介</a></li>
            <li><a href="bl_EnterpriseDynamics">企业动态</a></li>
            <li><a href="bl_product">产品中心</a></li>
            <li><a href="bl_contact">博露商城</a></li>
            <li style="margin-left: 300px;"><a href="#"><img src="./img/wh.png" alt=""></a></li>
            <li><a href="#"><img src="./img/person.png" alt=""></a></li>
            <li><a href="#"><img src="./img/ss.png" alt=""></a></li>
        </ul>
    </div>
    <div></div>
    @php
        $post = \Illuminate\Support\Facades\DB::table('posts')->where('id', $id)->get();
    @endphp
    <div class="article_center list-inline clearfix">
        <div class="clearfix">
            <ul>
                <li>{{ $post->title }}</li>
                <li class="text-center">{{ $post->description }}</li>
                <li>{{ $post->created_at }}，{{ $post->author }}编</li>
                <li><img src="{{ $post->img }}"></li>
                <li class="text-center">{{ $post->content }}</li>
            </ul>
        </div>
        <div class="clearfix">
            <ul>
                @php
                    $posts = postInfo(0, 3, "priority", "desc");
                    foreach ($posts as $post) {
                        echo "<li><img src=\"$post->img\"></li>";
                    }
                @endphp
                <li>
                    <div>相关信息</div>
                    <div>Related information</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="footerBottom footerTop text-center">
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
</div>
</body>
</html>
