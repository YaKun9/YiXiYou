<?php

//阻塞代码防止出现脏数据
$ininalock=$wjid."_lock".".txt";
include("./ini/zsini.php");
if($zsspd==1){


$zbid=$npcc;
$arr = explode("_",$npcc);
$npcc=$arr[0];
$npccid=$arr[1];
$xpid=$npccid;

	
$wpid=$npcc;
//调用物品信息
include("./wp/wpxx.php");
	
$pd=0;//初始
$wpts="";//初始	
$wpdz1=[];//初始
$wpdz2=[];//初始
$wpdz3=[];//初始
$wpdz4=[];//初始
$wpdz5=[];//初始
//提供需要扣除的物品作为判读依据
$wpdz1[]=$wpmz;//名字
$wpdz2[]=4;//物品分类
$wpdz3[]=$wpid;//物品id
$wpdz4[]=1;//	需要扣除的量
$wpdz5[]=1;//	重量
//提供需要扣除的物品作为判读依据
include("./pz/ini_pzz026.php");


if ($pd==2) {

echo "<font color=black>恭喜你！！将".$wpmz."注入星盘，实力得到大幅度提示</font>"."<br>";

include("./sql/mysql.php");//调用数据库连接 
$q2="xp";
$strsql = "update $q2 set xpid=$wpid where wjid=$wjid and id=$xpid";//物品id号必改值
$result = mysql_query($strsql);
//更新缓存数据
$inina="xp.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
_unlink($ininame); //删除文件
//更新缓存数据

 //更新缓存数据
$inina="ztt.ini";
$path='ache/'.$wjid;
//判断ini文件是否存在	
$ininame = $path."/".$inina;
_unlink($ininame); //删除文件
//更新缓存数据





} else{
echo "<font color=black>注入星盘失败联系GM处理</font>"."<br>";

}













echo "<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=589;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回上级</font></a>"."<br>";



//cmd及超链接值
$cmid=$cmid+1;
$cdid[]=$cmid;
$clj[]=2;
$npc[]=0;
echo "<a href='xy.php?uid=$wjid&&cmd=$cmid&&sid=$a1'><font color=blue>返回游戏</font></a>"."<br>";




echo "----------------------"."<br>";

//cmd及超链接值
include("fhgame.php");



} else{	
}
//解锁当前使用的ini
include("./ini/jsini.php");
//解锁当前使用的ini

?>