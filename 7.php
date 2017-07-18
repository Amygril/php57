<?php
header("content-type:text/html;charset=utf-8");

function aa(){
$arr=func_get_args();
// 接收全部的实参值
$maxval =func_get_arg(0);
// 设置数组中的最大值
$len =func_num_args();
// 设置实参个数；
for($i=1; $i<$len;$i++){
	if($maxval<func_get_arg($i)){
		$maxval=func_get_arg($i);
	}
 }
echo $maxval;
}


aa(1,2,55,45,69);
echo"<br>";
$_GET['num']=1;
$GLOBALS['age']=24;
echo $GLOBALS['age'];
function f1(){
	$num2 =100;
	echo $num2;
}
f1();

echo$GLOBALS['age'];

echo "<br>";
$name ="赵又廷";
$sex ='男';
echo 