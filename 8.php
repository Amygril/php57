<?php
header("content-type:text/html;charset=utf-8");
$n =99;
function f1(){
	global $n;
	echo $n;
}
f1();
echo $n;

function f2(){
	static $num=1;
	echo"这是函数的第".$num."调用"."<br>";
	$num++;


}
for($i=0; $i<5;$i++){
	f2();
}
echo "<hr>";
$arr =array(1,"zxo","hh");
echo "<pre>";
print_r($arr);

var_dump(time());
echo date("Y年m月d日H是i分s秒",1489148542);
$str="";
$len=4;
for($i=0;$i<$len;$i++){
	$str.=dechex(mt_rand(0,7));

}
echo "验证码是:".$str;
echo"<br>";

function ff($n){
	if($n==!1){
		return 1;
	}
	$st=$n*ff($n-1);
	return $st;
}
$dd=ff(12);
echo $dd;
echo "<hr/>";
function zz($n){
	if($n==1){
		return 1;
	}
	$res=1;
	for($i=2;$i<=$n;$i++){
     $res*=$i;
	}
	return $res;
}
$qq=zz(8);
echo $qq;
function ss($n){
	if($n ==1 ||$n ==2){
		return $s=1;
	}
	$s=ss($n-1)+ss($n-2);
	return $s;
}
echo ss(12);
