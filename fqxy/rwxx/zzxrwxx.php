<?php



if ($wjid==10000001 && $config['debug']==true) {//gm号可看


echo "<font color=red>==========任务调试信息=========</font>"."<br>";
echo "任务编号：".$rw1."号<br>";
echo "任务进程值：".$rw2."号<br>";
echo "任务名称：【".$rw6."】<br>";
echo "<font color=red>==========任务调试信息==1=======</font>"."<br>";

} else{


	
} 

$rid=$rw2;
$xysg=$rw4;
$ysg=$rw3;
if($rw1 ==1){
	
if($rid>=1&&$rid<=100){
include("zzxrw01_1.php");
} elseif($rid>=101&&$rid<=200){
include("zzxrw02_1.php");
} elseif($rid>=201&&$rid<=300){	
include("zzxrw03_1.php");
} elseif($rid>=301&&$rid<=400){
include("zzzxrw04_1.php");
} elseif($rid>=401&&$rid<=500){
include("zzxrw05_1.php");

	
} else{
echo "<font color=black>没有这个任务变量：".$rid."请尝试联系gm解决此问题！！</font><br>";
}

} elseif($rw1 ==2){


} else{
echo "<font color=black>没有这个任务ID：".$rw1."请尝试联系gm解决此问题！！</font><br>";
}




?>