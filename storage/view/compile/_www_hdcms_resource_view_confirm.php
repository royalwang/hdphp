<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>温馨提示</title>
    <script>
        hdjs = {
            path: 'resource/hdjs'
        }
    </script>
    <script src="resource/hdjs/dist/hd.js"></script>
</head>
<body style="background: url('../../../web/common/images/bg2.jpg');background-size: cover">
<!--导航-->
<nav class="navbar navbar-inverse" style="border-radius: 0px;">
    <div class="container-fluid">
        <div class="navbar-header">
            <ul class="nav navbar-nav">
                <li>
                    <a href="http://bbs.houdunwang.com" target="_blank"><i class="fa fa-w fa-forumbee"></i> 后盾论坛</a>
                </li>
                <li>
                    <a href="http://www.houdunwang.com" target="_blank"><i class="fa fa-w fa-phone-square"></i> 联系后盾</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!--导航end-->

<div class="container-fluid">

    <h1>&nbsp;</h1>

    <div style="background: url('../../../web/common/images/logo.png') no-repeat;background-size: contain;height:60px;"></div>
    <br/>

    <div class="alert alert-info clearfix jumbotron" s>
        <br/>
        <div class="col-xs-2">
            <i class="fa fa-info-circle fa-5x"></i>
        </div>
        <div class="col-xs-10">
            <p><?php echo $message?></p>

            <p>
                <a href="<?php echo $sUrl?>" class="btn btn-primary" style="width: 80px;">是</a>&nbsp;
                <a href="<?php echo $eUrl?>" class="btn btn-default" style="width: 80px;">否</a>
            </p>
            <p>
                [<a href="javascript:;" onclick="location.href=history.go(-1)" class="alert-link">点击返回上一页</a>]
                [<a href="<?php echo __ROOT__?>" class="alert-link">首页</a>]
            </p>
        </div>
    </div>
</div>
</body>
</html>