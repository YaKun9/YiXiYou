<!DOCTYPE html>
<html lang="zh">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>幻想西游GM管理平台</title>
</head>

<body>

<div style='width: device-width;display:block;word-break: break-all;word-wrap: break-word;'>
    <?php
    include_once __DIR__ . '/../includes/constants.php';
    $configs = include JY_CONFIG_DIR . '/config.php';
    $xxjyurl = $configs['jy_url'];

    error_reporting(E_ALL & ~E_NOTICE);
    $wjid=$_GET['wjid'];
    $password=$_GET['pass'];
    //ini文件名字
    $inina="user2.ini";
    //路径
    $path='../ache/gm';
    //判断ini文件是否存在
    $ininame = $path."/".$inina;
    $filename = $ininame;
    if(file_exists($filename)){
        include("../class/iniclass.php");//调用iniclass文件
        //调用user.ini是否存在
        include("../ini/user2_ini.php");
        $pass=($iniFile->getItem('验证信息','玩家验证'));
        if($pass!=""||$password!=""){
        }else{
            $pass=1;
        }
        if($pass==$password){
            $name=($iniFile->getItem('验证信息','玩家昵称'));
            echo "<font color=red>【请选择你需要要操作项目】</font>"."<br>";
            echo "<a href=".$xxjyurl."/admin/gm02.php?wjid=$wjid&pass=$password><font color=blue>【提取注册码】</font></a>"."<br>";
            echo "<a href=".$xxjyurl."/admin/index.php?wjid=$wjid&pass=$password><font color=blue>返回GM管理平台</font></a>"."<br>";
        } else {
            $xyurl=$xxjyurl."/admin/login.php";
            $zcxx="<font color=red>当前验证信息失效,请重新登录</font>"."<br><br><a href='login.php'><font color=blue>返回GM登录</font></a>"."<br>";
        }
    } else {
        $xyurl=$xxjyurl."/admin/login.php";
        $zcxx="<font color=red>当前验证信息失效,请重新登录</font>"."<br><br><a href='login.php'><font color=blue>返回GM登录</font></a>"."<br>";
    }
    ?>
</div>

</body>
</html>




