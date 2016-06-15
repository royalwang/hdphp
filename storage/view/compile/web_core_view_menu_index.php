<!DOCTYPE html>
<html lang="en" class="app">
<head>
    <meta charset="utf-8"/>
    <title>HDCMS - 免费开源多站点管理系统</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link href="../../../web/common/css/common.css" rel="stylesheet">
    <script>
        var hdjs = {
            path: 'resource/hdjs',
            upimage: {
                upload: "http://localhost/hdcms/index.php?s=core/upload/upImage", //上传地址
                list: "http://localhost/hdcms/index.php?s=core/upload/getImageLists",//图片列表地址
                del: "http://localhost/hdcms/index.php?s=core/upload/remove",//删除图片
            },
            kindeditor: {
                uploadJson: 'ab',
                fileManagerJson: 'aa'
            }
        }
    </script>
    <script src="resource/hdjs/dist/hd.js"></script>
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/r29/html5.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        if (navigator.appName == 'Microsoft Internet Explorer') {
            if (navigator.userAgent.indexOf("MSIE 5.0") > 0 || navigator.userAgent.indexOf("MSIE 6.0") > 0 || navigator.userAgent.indexOf("MSIE 7.0") > 0) {
                alert('您使用的 IE 浏览器版本过低, 推荐使用 Chrome 浏览器或 IE8 及以上版本浏览器.');
            }
        }
    </script>
</head>
<body class="hdcms">
<div class="container-fluid admin-top ">
    <!--导航-->
    <nav class="navbar navbar-inverse">
        <div class="container-fluid">
            <div class="navbar-header">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="http://localhost/hdcms/index.php?s=core/index/index"><i class="fa fa-w fa-cogs"></i> 系统管理</a>
                    </li>
                    <li>
                        <a href="http://www.hdphp.com/doc" target="_blank"><i class="fa fa-w fa-file-code-o"></i> 在线文档</a>
                    </li>
                    <li>
                        <a href="http://bbs.houdunwang.com" target="_blank"><i class="fa fa-w fa-forumbee"></i> 后盾论坛</a>
                    </li>
                    <li>
                        <a href="http://www.houdunwang.com" target="_blank"><i class="fa fa-w fa-phone-square"></i> 联系后盾</a>
                    </li>
                </ul>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button">
                            <i class="fa fa-w fa-user"></i>
                            admin(系统管理员)
                            <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#">修改密码</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="javascript:out();">退出</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!--导航end-->
</div>
<div class="container-fluid  system-container" ng-controller="ctrl">
    <div class="container-fluid" style="margin-top: 30px;margin-bottom: 20px;">
        <div class="col-md-6" style="background: url('../../../web/common/images/logo.png') no-repeat;background-size: contain;height: 60px;opacity: .9;">
        </div>
        <div class="col-md-6">
            <ul class="nav nav-pills pull-right">
                <li>
                    <a href="http://localhost/hdcms/index.php?s=core/index/index" class="tile ">
                        <i class="fa fa-sitemap fa-2x"></i>网站管理
                    </a>
                </li>
                <li>
                    <a href="http://localhost/hdcms/index.php?s=core/system/index" class="tile ">
                        <i class="fa fa-support fa-2x"></i>系统设置
                    </a>
                </li>
                <li>
                    <a href="http://localhost/hdcms/index.php?s=core/index/out" class="tile">
                        <i class="fa fa-sign-out fa-2x"></i>退出
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div class="well">
        
    <ol class="breadcrumb">
        <li><i class="fa fa-home"></i></li>
        <li><a href="<?php echo u('system/index')?>">系统</a></li>
        <li class="active">菜单列表</li>
    </ol>
    <ul class="nav nav-tabs">
        <li role="presentation" class="active"><a href="#">菜单列表</a></li>
        <li role="presentation"><a href="#">模块菜单</a></li>
    </ul>
    <h5 class="page-header">菜单列表</h5>

    <div class="alert alert-info">
        <i class="fa fa-info-circle"></i>
        系统内置的菜单不允许修改 "链接地址"，不允许切换 "显示状态", 不允许 "删除"
    </div>

    <div class="panel panel-default">
        <div class="panel-body table-responsive">
            <table class="table">
                <thead>
                <tr>
                    <th>排序</th>
                    <th>名称</th>
                    <th>标识</th>
                    <th>类型</th>
                    <th>权限标识</th>
                    <th>显示</th>
                    <th>系统</th>
                    <th>链接地址</th>
                    <th>子标题</th>
                    <th>子链接</th>
                    <th>操作</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    </div>
    <div class="text-muted footer">
        <a href="http://www.houdunwang.com">高端培训</a>
        <a href="http://www.hdphp.com">开源框架</a>
        <a href="http://bbs.houdunwang.com">后盾论坛</a>
        <br/>
        Powered by hdcms v2.0 © 2014-2019 www.hdcms.com
    </div>
</div>
</body>
</html>
