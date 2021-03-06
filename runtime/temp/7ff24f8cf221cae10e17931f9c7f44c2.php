<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:65:"E:\WWW\huaxian\public/../application/admin\view\message\edit.html";i:1526608839;}*/ ?>
<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,member-scalable=no" />
<meta http-equiv="Cache-Control" content="no-siteapp" />
<!--[if lt IE 9]>
<script type="text/javascript" src="lib/html5.js"></script>
<script type="text/javascript" src="lib/respond.min.js"></script>
<script type="text/javascript" src="lib/PIE_IE678.js"></script>
<![endif]-->
<link rel="icon" href="" type="image/x-icon"/>
<link href="__PUBLIC__/css/H-ui.min.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/css/H-ui.admin.css" rel="stylesheet" type="text/css" />
<link href="__PUBLIC__/lib/icheck/icheck.css" rel="stylesheet" type="text/css" />
<link href="../../../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<title>回复或修改留言</title>
</head>
<body>
<a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" 
 href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
<div class="pd-20">
  <form action="<?php echo url('Message/edit'); ?>" method="post" class="form form-horizontal" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $id; ?>">
    <div class="row cl" style="margin-top: 40px;">
      <label class="form-label col-3">留言内容：</label>
      <div class="formControls col-5">
        <!-- <input type="text" name="title" class="input-text" value="<?php echo $list['title']; ?>" placeholder="" id="" datatype="*1-200"  nullmsg="姓名不能为空" style="width: 360px;"> -->
        <?php echo $list['title']; ?>
      </div>
      <div class="col-1"> </div>
    </div>
    <div class="row cl">
      <label class="form-label col-3">留言人：</label>
      <div class="formControls col-5">
        <?php echo $list['yonghu']; ?>
        <!-- <input type="text" name="yonghu" class="input-text" value="" placeholder="" id="" datatype="*1-200" readonly="readonly"  style="width: 360px;"> -->
      </div>
      <div class="col-1"> </div>
    </div>
    <div class="row cl">
      <label class="form-label col-3">留言时间：</label>
      <div class="formControls col-5">
        <?php echo $list['time1']; ?>
        <!-- <input type="text" name="time1" class="input-text" value="" placeholder="" id="" datatype="*1-200" readonly="readonly"  style="width: 360px;"> -->
      </div>
      <div class="col-1"> </div>
    </div>
    <div class="row cl">
      <label class="form-label col-3"><span class="c-red">*</span>回复内容：</label>
      <div class="formControls col-5">
        <textarea name="content" class="textarea"  placeholder="请输入特色描述内容..."  dragonfly="true" nullmsg="描述不能为空！" onKeyUp="textarealength(this,300)" style="width: 360px;height: 100px;"><?php echo $list['content']; ?></textarea>
      </div>
      <div class="col-1"> </div>
    </div>
    <!-- <div class="row cl" >
            <label class="form-label col-3"><span class="c-red">*</span>图片：</label>
            <div class="formControls col-8"> 
                <span class="btn-upload form-group">
                    <input class="input-text upload-url" type="text" name="image" id="uploadfile-2" placeholder="点击上传图片">
                    <a href="javascript:void();" class="btn btn-primary radius upload-btn"><i class="Hui-iconfont">&#xe642;</i> 浏览文件</a>
                    <input type="file"  name="image" class="input-file">
                </span>
            </div>
        </div> -->
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>是否为精选留言：</label>
            <div class="formControls col-3"> <span class="select-box">
                <select class="select" size="1" name="good" datatype="*" nullmsg="请选择是否单独展示在页面！">
                <?php if($list['good'] == 1): ?>
                    <option value="1" selected="selected">是</option>
                    <option value="0">否</option>
                <?php else: ?>
                    <option value="1">是</option>
                    <option value="0" selected="selected">否</option>
                <?php endif; ?>
                </select>
            </span> </div>
            <div class="col-1"> </div>
        </div>
        <div class="row cl">
            <label class="form-label col-3"><span class="c-red">*</span>是否为热门留言：</label>
            <div class="formControls col-3"> <span class="select-box">
                <select class="select" size="1" name="hot" datatype="*" nullmsg="请选择是否单独展示在页面！">
                <?php if($list['hot'] == 1): ?>
                    <option value="1" selected="selected">是</option>
                    <option value="0">否</option>
                <?php else: ?>
                    <option value="1">是</option>
                    <option value="0" selected="selected">否</option>
                <?php endif; ?>
                </select>
            </span> </div>
            <div class="col-1"> </div>
        </div>
      <div class="col-9 col-offset-3" style="margin-top:30px;">
        <input class="btn btn-primary radius" type="submit" value="&nbsp;&nbsp;提交&nbsp;&nbsp;">
        <a href="javascript:history.back(-1)" class="btn btn-primary radius">&nbsp;&nbsp;返回&nbsp;&nbsp;</a>
      </div>
    </div>
  </form>
</div>
</div>
<script type="text/javascript" src="__PUBLIC__/lib/jquery/1.9.1/jquery.min.js"></script>  
<script type="text/javascript" src="__PUBLIC__/js/H-ui.js"></script> 
<script type="text/javascript" src="__PUBLIC__/js/H-ui.admin.js"></script> 
</body>
</html>