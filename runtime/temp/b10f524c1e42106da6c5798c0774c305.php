<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:77:"E:\wamp\www\transport\public/../application/index\view\service\temperate.html";i:1506406893;s:73:"E:\wamp\www\transport\public/../application/index\view\common\header.html";i:1506071803;s:73:"E:\wamp\www\transport\public/../application/index\view\common\footer.html";i:1505989080;}*/ ?>
﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>温度监控</title>
<link rel="icon" href="" type="image/x-icon"/>
<link href="../../static/index/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../static/index/css/font-awesome.min.css">
<link rel="stylesheet"  href="__PUBLIC__/css/higo.css" />
<link rel="stylesheet" type="text/css" href="__PUBLIC__/css/style.css">
<link href="__PUBLIC__/css/city-picker.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/zym.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- 头部开始 -->

<div class="top">
    <div class="clearfix wrap-1200">
        <p class="fl"><!-- <span>易冷链，专注冷鲜，用心服务。&nbsp;&nbsp;</span> --><span><a class="glyphicon glyphicon-earphone" style="color: white;"></a>&nbsp;&nbsp;服务热线：0371—55172118</span></p>
        <?php if(session('username') == ''): ?>
            <p class="fr reg">
                <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
                    <span><i class="glyphicon glyphicon-user"></i>&nbsp;个人中心</span>
                </a>    
                <a href="<?php echo url('Login/login'); ?>"><span>登录</span></a>
                <a href="<?php echo url('Login/register'); ?>"><span>注册</span></a>
            </p>
            <?php else: ?>
            <p class="fr reg">
                <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
                    <span><i class="glyphicon glyphicon-user"></i>&nbsp;个人中心</span>
                </a>  
                <span>欢迎您：<?php echo session('username')?> </span>
                <a href="<?php echo url('Login/logout'); ?>"><span>退出</span></a>
            </p>
        <?php endif; ?>
    </div>
</div>

<!-- 头部结束 -->
<!-- 导航开始 -->
<div class="head clearfix" style="overflow: visible;">
            <div class="logo" style="width: auto;">
            <a class="fl" href="<?php echo url('Index/index'); ?>" style="width: 180px;">
                <img src="__PUBLIC__/images/logoa.png" alt=""/>
                <!-- <h2 style="width:200px; text-align: center; line-height: 26px; margin-top: 10px; margin-left: 40px;"><span style="font-size: 24px; ">陆港易冷链</span><br><span>LUGANG YILENGLIAN</span></h2> -->
                </a>
                <style type="text/css">

                </style>
                <!-- <div class="fr logofont">
                <p>专注冷鲜</p>
                <p style="margin-left: 16px;">用心服务</p>
                </div> -->
                <!-- <div class="fr logoimg">
                    <img src="__PUBLIC__/images/a2.png">
                </div> -->
                <div class="clearfix"></div>
            </div>
            <ul class="nav_wrap clearfix fr" style="margin-left: 0px; margin-right: -20px;">
                
                <li class="now">
                    <a href="<?php echo url('Index/index'); ?>">
                        <em>首页</em>
                    </a>
                </li>
                <li class="now">
                    <a href="<?php echo url('Goods/goods_car'); ?>">
                        <em>货源信息</em>
                    </a>
                </li>
                <li class="now">
                    <a href="<?php echo url('Path/path'); ?>">
                        <em>车源信息</em>
                    </a>
                </li>
                <li class="now">
                    <a href="<?php echo url('Warehouse/warehouse'); ?>">
                        <em>库源信息</em>
                    </a>
                </li>
                <li>
                    <a href="<?php echo url('Inland/inlandcoldchain'); ?>">
                        <em>国内冷链</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Inland/inlandcoldchain'); ?>">业务介绍</a></li>
                        <li><a href="<?php echo url('Inland/inlandmoney'); ?>">费用查询</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Internation/internationcoldchain'); ?>" >
                        <em>国际冷链</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Internation/internationcoldchain'); ?>">业务介绍</a></li>
                        <li><a href="<?php echo url('Internation/internationmoney'); ?>">费用查询</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Rent/boxrent'); ?>">
                        <em>箱库租赁</em>
                    </a>
                    <ul class="drowdown" >
                        <li><a href="<?php echo url('Rent/boxrent'); ?>">冷藏箱租赁</a></li>
                        <li><a href="<?php echo url('Rent/storerent'); ?>">冷库租赁</a></li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo url('Aboutus/aboutus'); ?>">
                        <em>关于我们</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Aboutus/aboutus'); ?>">公司简介</a></li>
                        <li><a href="<?php echo url('Aboutus/cultural'); ?>">企业文化</a></li>
                        <li><a href="<?php echo url('Aboutus/honor'); ?>">荣誉资质</a></li>
                    </ul>
                </li>
                <!-- <li>
                    <a href="<?php echo url('Goods/goods_car'); ?>">
                        <em>信息共享</em>
                    </a>
                    <ul class="drowdown">
                        <li><a href="<?php echo url('Path/path'); ?>">车源信息</a></li>
                        <li><a href="<?php echo url('Warehouse/warehouse'); ?>">库源信息</a></li>
                        <li><a href="<?php echo url('Goods/goods_car'); ?>">货源信息</a></li>
                    </ul>
                </li> -->
                <!-- <li>
                    <a href="<?php echo url('Personalcenter/personalcenter_index'); ?>">
                        <em>个人中心</em>
                    </a>
                </li> -->
            </ul>
            <div class="clearfix"></div>
        </div>


<!-- 头部结束 -->
<div class="ziye_bj" style="float: none;">
    <div class="ziye_tu">
        <img src="__IMG__<?php echo $banner['temperate']; ?>">
    </div>
</div>
<!-- 内容开始 -->
<div style="width: 100%;background: #f5f5f5;">
    <div class="goodstrace wrap-1200 webAgency_box" style="padding-top: 50px;">
        <h2>温度监控
            <div class="linel"></div>
            <div class="liner"></div>
        </h2>
        <p class="entit">temperature monitoring</p>
        <div class="trace_l fl" style="width:60%">
            <p class="des indent">基于物联网的易冷链储运环境温度监控平台，可为相应客户提供冷链运输环节和冷库存储环节的温度监控。冷链运输过程中的所关联的货主、车主、库主及企业平台都可以凭借订单编号或者车辆信息登录网站平台查询每个环节的实时温度数据。</p>
            <div>
                <style>
                    .usertitle{
                        color: #f57707;
                        font-size: 18px;
                    }
                    .useritem {
                        width:500px;
                        margin: 0 auto;
                        padding-top: 30px;
                    }
                    .useritem li{
                        display: inline-block;
                        width: 150px;
                        height: 120px;
                        border:1px solid #ddd;
                        margin:0px 40px;
                        text-align: center;
                        font-size: 18px;
                        color: #fff;
                        background: #ec5b6c;
                    }
                    .useritem li span{
                        margin-top: 30px;
                        font-size: 30px;
                    }
                    .entit{
                        text-align: center;
                        font-size: 14px;
                        color: #2563b0;
                        margin-top: -40px;
                        margin-bottom: 50px;
                        text-transform: uppercase;
                    }
                </style>
                <p class="usertitle">服务环节</p>
                <ul class="useritem">
                    <li><span class="fa fa-truck"></span><p>运输环节</p></li>
                    <li style="background: #339dd7;"><span class="fa fa-bank"></span><p>存储环节</p></li>
                </ul>
            </div>
        </div>
        <div class="trace_r fr" style="width:40%">
            <img class="gps" src="__PUBLIC__/images/temp.png" style="width:350px; height: 300px; margin-top: 20px;">
        </div>
        <div class="clearfix"></div>
    </div>
</div>

<section class="section_box" style="padding:40px 0px 120px 0px;">
<div class="wrap-1200 webAgency_box">
    <h2>优势介绍
        <div class="linel"></div>
        <div class="liner"></div>
    </h2>
    <p class="entit">Advantages introduced</p>
    <div class="about_advantage">
        <span class="main_txt" style="color:#31A5E0;font-size:20px;">温度<br>
        <b style="color:#009A44;font-size:30px;">监控</b></span> 
        <span class="text_00 text_01">全程追溯<br>安全可靠</span> 
        <span class="text_00 text_02">实时监控<br>预警机制</span> 
        <span class="text_00 text_03">提高效率<br>最佳保鲜</span> 
        <span class="text_txt text_txt_01">对于冷链进行监控也符合食品的安全监管要求，易腐食品通过对冷藏温度进行监控，以保证其品质的优良性和食用的安全性，保证消费者在购买时产品仍具有良好的食用品质，对消费者健康进行负责。</span> 
        <span class="text_txt text_txt_02">温度监控系统可以实现货主、车主、库主及企业平台等多方的全程冷链温度数据实时监管。通过温度监控中的冷链实时监控和预警机制，可减少运输物品的损坏变质，减少物流损失，降低成本，减少不必要的损失；</span> 
        <span class="text_txt text_txt_03">全程冷链监控，可为货主、车主、库主减少冷链运输繁琐环节，减少运输作业，提高运输效率，确保商品最佳保鲜时间。</span> 
    </div>
</div>
</section>
<!-- 内容结束 -->
<!-- 底部结束开始 -->

<!-- <div class="dibu">
    <div class="dibu_jz">
        <div class="dibu_zuo">
            <p>联系地址：郑州国际陆港开发建设有限公司<br>
            电 话：0851-85594612   <br></p>
        </div>
        <div class="dibu_you">
            <ul>
                <li><a href="<?php echo url('Service/brokerage'); ?>">报关报检&nbsp;&nbsp;</a>｜</li>
                <li><a href="<?php echo url('Service/labelprint'); ?>">标签印刷&nbsp;&nbsp;</a>｜</li>
                <li><a href="<?php echo url('Service/secondpack'); ?>">二次包装&nbsp;&nbsp;</a>｜</li>
                <li><a href="<?php echo url('Service/joinus'); ?>">合作加盟&nbsp;&nbsp;</a></li>
                <div style="clear: both;"></div>
            </ul>
            <img class="dibu_logo" src="__PUBLIC__/images/dibu_03.png"> 
        </div>
    </div>
</div>
<div class="dibu_1">
    <p>版权所有 郑州国际陆港开发建设有限公司 豫ICP备10001741号
</p>
</div> -->


<div class="footer" style="background: #337cc9; margin-top: 0px;">
    <div class="row higo-content-floor higo-friend-link " style="width: 1200px; margin: 0 auto; text-align: center;padding: 20px 0px;">
        <div class="col-md-3 col-xs-3" style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul>
                <li>
                    <!-- <img src="__PUBLIC__/images/ewm.png" alt="" style="width:130px; height: 130px;"> -->
                    <img src="__PUBLIC__/images/底部二维码.png" alt="" style="width:130px; height: 130px;">
                    <p>扫描二维码，了解我们</p>
                </li>
            </ul>
        </div>
        <div class="col-md-2 col-xs-2" style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">关于平台</li>
                <li><a href="<?php echo url('Foot/aboutplant'); ?>">平台介绍</a></li>
                <li><a href="<?php echo url('Foot/contactus'); ?>">联系我们</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-xs-2" style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">用户指南</li>
                <li><a href="<?php echo url('Foot/register_flowpath'); ?>">注册指南</a></li>
                <li><a href="<?php echo url('Foot/auth_flowpath'); ?>">认证指南</a></li>
                <li><a href="<?php echo url('Foot/upload_flowpath'); ?>">发布指南</a></li>
                <li><a href="<?php echo url('Foot/deal_flowpath'); ?>">交易指南</a></li>
                <li><a href="<?php echo url('Service/onlineorder'); ?>">下单流程</a></li>
            </ul>
        </div>
         <div class="col-md-2 col-xs-2"  style="border-right: 1px dashed #5496e8;height: 180px;">
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">友情链接</li>
                <li><a href="http://www.zzguojilugang.com/" target="_blank">郑州陆港</a></li>
                <li><a href="" target="_blank">中陆官网</a></li>
                <li><a href="http://banliego.com/" target="_blank">班列购</a></li>
            </ul>
        </div>
        <div class="col-md-2 col-xs-2" >
            <ul style="line-height: 24px;">
                <li class="higo-firend-head">使用帮助</li>
                <li><a href="<?php echo url('Foot/problem'); ?>">常见问题</a></li>
                 <!-- <li><a href="">联系客服</a></li> -->
            </ul>
        </div>

    </div>
</div>
<div class="footer1" style="background: #0066b3; padding:20px 0px; text-align: center;color: #fff">
    <p><span style="color: #eee">版权所有</span>&nbsp;郑州国际陆港开发建设有限公司 <span style="color: #eee; margin-left: 20px;">备案号：</span>&nbsp;豫ICP备17007279号
</div>
<!-- 底部开始结束 -->
<script type="text/javascript" src="__PUBLIC__/js/jquery.min.js"></script>
<script type="text/javascript" src="__PUBLIC__/js/main.js"></script>
<script type="text/javascript">
    $('.nav_wrap').find('li').removeClass('now');
    $('.nav_wrap').children('li').eq(0).addClass('now');
</script>
</body>
</html>
