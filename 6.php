<?php
 header("content-type:text/html;charset=utf-8");
$dd=function ($a,$b){
	// echo "美味".$a.$b."做好了";
	return "美味".$a.$b."做好了";
	// return不能表示，函数不能返回多个值；
	echo "111";
	echo "<br/>";
};

// if(!function_exists("dd")){
	// function dd($a,$b){
	// echo "的".$a.$b."做好了";	
	// }
// }

// $dd(3,4);
// var_dump($dd);
function cj($sc){
	$mag="";
	$sc=55;
	if($sc>60){
		$mag= "及格";
	}else{
		$mag="不及格";
	}
	$res =array($sc,$mag);
	return $res;
}
$scr = 85;
$res = cj($scr);
// echo "成绩".$res[0]."评分".$res[1];
// var_dump($res);
echo $scr;
echo"<hr>";
function cc($aa,$ff){
	if($aa>$ff){
		echo "合格";
	}else{
		echo "不合格";
	} 
}
$bb=100;
$bb_1 =125;
cc($bb,$bb_1);
echo"<br>";

$str ="";
$len =4;
for($i=0; $i<$len;$i++){
	$str.= dechex(mt_rand(0,15));
}
echo "验证码:".$str;
echo "<br>";
function f($n){
	if($n==1){
 return 1;
	}
  $res =$n*f($n-1);
	return $res;
}
$aa =f(4);
echo $aa;



