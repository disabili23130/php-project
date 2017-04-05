<?php
$list=$_POST["list"];
for($i=0;$i<count($list);$i++){
	if($list[$i]==1){
		echo "<img src=a.jpg width=50%><br>";
	}
	if($list[$i]==2){
		echo "<img src=b.jpg width=50%><br>";
	}
	if($list[$i]==3){
		echo "<img src=c.jpg width=50%><br>";
	}
	if($list[$i]==4){
		echo "<img src=d.jpg width=50%><br>";
	}
	if($list[$i]==5){
		echo "<img src=e.jpg width=50%><br>";
	}
	if($list[$i]==6){
		echo "<img src=f.jpg width=50%><br>";
	}
	if($list[$i]==7){
		echo "<img src=g.jpg width=50%><br>";
	}
	if($list[$i]==8){
		echo "<img src=h.jpg width=50%><br>";
	}
	if($list[$i]==9){
		echo "<img src=i.jpg width=50%><br>";
	}
	if($list[$i]==10){
		echo "<img src=j.jpg width=50%><br>";
	}
	if($list[$i]==11){
		echo "<img src=k.jpg width=50%><br>";
	}
	if($list[$i]==12){
		echo "<img src=l.jpg width=50%><br>";
	}
}
$time=time();
//echo $time;
echo "<br>格林威治時間";
echo date("F j Y H:i:s l")."<br>現在時間";
$a=strtotime("+8 hours",$time);
echo date("F j Y H:i:s l",$a)."<br>";

$b=date("0 0 0 12 31 2017");
$c=($b-$time);
echo date("剩F月j日i分s秒",$c);
?>