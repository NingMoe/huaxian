<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:68:"E:\WWW\huaxian\public/../application/admin\view\city\lst_basics.html";i:1527822027;}*/ ?>
﻿   <!DOCTYPE HTML>
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
<link href="../../../static/admin/lib/Hui-iconfont/1.0.1/iconfont.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="__PUBLIC__/js/jquery.simplePagination.js"></script> 
<link type="text/css" rel="stylesheet" href="__PUBLIC__/css/page.css"/>
<!--[if IE 6]>
<script type="text/javascript" src="http://lib.h-ui.net/DD_belatedPNG_0.0.8a-min.js" ></script>
<script>DD_belatedPNG.fix('*');</script>
<![endif]-->
<link rel="stylesheet" href="__PUBLIC__/kindeditor/themes/default/default.css"/>
<link rel="stylesheet" href="__PUBLIC__/kindeditor/plugins/code/prettify.css"/>
<!-- <script charset="utf-8" src="__PUBLIC__/kindeditor/kindeditor-all.js"/></script> -->
<!-- <script charset="utf-8" src="__PUBLIC__/kindeditor/lang/zh-CN.js"/></script> -->
<!-- <script charset="utf-8" src="__PUBLIC__/kindeditor/plugins/code/prettify.js"/></script> -->
<!-- <script type="text/javascript" src="__PUBLIC__/lib/My97DatePicker/WdatePicker.js"></script> -->
<!-- <script type="text/javascript">
    KindEditor.ready(function(K) {
        var editor1 = K.create('textarea[name="content"]', {
            cssPath : '__PUBLIC__/kindeditor/plugins/code/prettify.css',
            uploadJson : '__PUBLIC__/kindeditor/php/upload_json.php',
            fileManagerJson : '__PUBLIC__/kindeditor/php/file_manager_json.php',
            allowFileManager : true,
            afterCreate : function() {
                var self = this;
                K.ctrl(document, 13, function() {
                    self.sync();
                    K('form[name=example]')[0].submit();
                });
                K.ctrl(self.edit.doc, 13, function() {
                    self.sync();
                    K('form[name=example]')[0].submit();
                });
            }
        });
        prettyPrint();
    });
</script> -->
<title>基础设施管理</title>
</head>
<body>

<nav class="breadcrumb"> 
     基础设施管理 <span class="c-gray en">&gt;</span> 
     基础设施列表 
     <a class="btn btn-success radius r mr-20" style="line-height:1.6em;margin-top:3px" href="javascript:location.replace(location.href);" title="刷新" ><i class="Hui-iconfont">&#xe68f;</i></a>
</nav>

<div class="pd-20">
	<div class="text-c"> 
	</div>
	<div class="cl pd-5 bg-1 bk-gray mt-20"> 
    <span class="l">
          <a href="<?php echo url('City/basicsadd'); ?>" class="btn btn-danger radius" >
          <i class="Hui-iconfont">&#xe600;</i> 添加基础设施</a>
    </span> 
    <span class="l" style="margin-left: 20px;">
          <a href="<?php echo url('City/basicsedit',array('id'=>$list['id'])); ?>" class="btn btn-danger radius" >
          <!-- <i class="Hui-iconfont">&#xe600;</i> --> 修改基础设施内容</a>
    </span>
    </div>
    <div class="row cl" style="margin-top: 40px; margin-left: 200px;" >
      <label class="form-label col-2" style="width: 90px">描述：</label>
      <div class="formControls col-8">
          <textarea name="description" class="textarea"  placeholder="请输入基础设施描述内容..."  dragonfly="true" nullmsg="内容不能为空！" readonly="true" onKeyUp="textarealength(this,300)"><?php echo $list['description']; ?></textarea>
      </div>
    </div>
    <div class="row cl" style="margin-top: 20px; margin-left: 200px;" >
      <label class="form-label col-2" style="width: 90px">卫生内容：</label>
      <div class="formControls col-8">
          <textarea name="health" class="textarea"  placeholder="请输入卫生相关内容..."  dragonfly="true" nullmsg="内容不能为空！" readonly="true" onKeyUp="textarealength(this,300)"><?php echo $list['health']; ?></textarea>
      </div>
    </div>
    <div class="row cl" style="margin-top: 20px; margin-left: 200px;" >
      <label class="form-label col-2" style="width: 90px">文化内容：</label>
      <div class="formControls col-8">
          <textarea name="culture" class="textarea"  placeholder="请输入文化相关内容..."  dragonfly="true" nullmsg="内容不能为空！" readonly="true" onKeyUp="textarealength(this,300)"><?php echo $list['culture']; ?></textarea>
      </div>
    </div>
    <div class="row cl" style="margin-top: 20px; margin-left: 200px;" >
      <label class="form-label col-2" style="width: 90px">教育内容：</label>
      <div class="formControls col-8">
          <textarea name="edu" class="textarea"  placeholder="请输入教育相关内容..."  dragonfly="true" nullmsg="内容不能为空！" readonly="true" onKeyUp="textarealength(this,300)"><?php echo $list['edu']; ?></textarea>
      </div>
    </div>
</div>
</body>
</html>