<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>公司管理后台</title>

    <link rel="stylesheet" href="/MyWebSite/Public/Admin_index/css/index.css" type="text/css" media="screen"/>

    <script type="text/javascript" src="/MyWebSite/Public/Admin_index/js/jquery.min.js"></script>
    <script type="text/javascript" src="/MyWebSite/Public/Admin_index/js/tendina.min.js"></script>
    <script type="text/javascript" src="/MyWebSite/Public/Admin_index/js/common.js"></script>

</head>
<body>
<!--顶部-->
<div class="top">
    <div style="float: left"><span
            style="font-size: 16px;line-height: 45px;padding-left: 20px;color: #fff">管理中心</h1></span></div>
    <div id="ad_setting" class="ad_setting">
        <a class="ad_setting_a" href="javascript:; "><?php echo session('admin_username');?></a>
        <ul class="dropdown-menu-uu" style="display: none" id="ad_setting_ul">
            <li class="ad_setting_ul_li"><a href="<?php echo U('Index/logout');?>"> <span class="font-bold">退出</span> </a></li>
        </ul>
        <img class="use_xl" src="/MyWebSite/Public/Admin_index/images/right_menu.png"/>
    </div>
</div>
<!--顶部结束-->
<!--菜单-->
<div class="left-menu">
    <ul id="menu">
        <li class="menu-list">
            <a style="cursor:pointer" class="firsta"><i class="glyph-icon xlcd"></i>Menu<s class="sz"></s></a>
            <ul>
                <li style="text-align: center"><a href="<?php echo U('Index/editor');?>" target="menuFrame">修改网页信息</a></li>
                <li style="text-align: center"><a href="<?php echo U('Index/changeaddr');?>" target="menuFrame">修改Address</a></li>
                <li style="text-align: center"><a href="<?php echo U('Index/newseditor');?>" target="menuFrame">新闻新增和编辑</a></li>
                <li style="text-align: center"><a href="<?php echo U('Index/newslist');?>" target="menuFrame">新闻列表</a></li>
                <li style="text-align: center"><a href="<?php echo U('Index/rongyu');?>" target="menuFrame">添加荣誉</a></li>
                <li style="text-align: center"><a href="<?php echo U('Index/rongyulist');?>" target="menuFrame">删除荣誉</a></li>
                <li style="text-align: center"><a href="<?php echo U('Index/feedback');?>" target="menuFrame">feedback</a></li>
                <li style="text-align: center"><a href="<?php echo U('Index/addProject');?>" target="menuFrame">添加项目</a></li>
                <li style="text-align: center"><a href="<?php echo U('Index/projectlist');?>" target="menuFrame">项目列表</a></li>
            </ul>
        </li>
    </ul>
</div>

<!--菜单右边的iframe页面-->
<div id="right-content" class="right-content">
    <div class="content">
        <div id="page_content">
            <iframe id="menuFrame" name="menuFrame" src="<?php echo U('Index/welcome');?>" style="overflow:visible;"
                    scrolling="yes" frameborder="no" width="100%" height="100%"></iframe>
        </div>
    </div>
</div>
</body>
</html>