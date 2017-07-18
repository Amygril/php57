<?php
header("content-type:text/html;charset=utf-8");

$s1 =34;
$s2 =80;
$s3 = $s1*$s2;

do{
$s4 =$s1 % $s2;
$s1 = $s2;
$s2 = $s4;
}while($s2 ==!0);
$ss =$s1;
$s5 = $s3/$ss;
echo "最大公约数:".$ss."最小公倍数:".$s5;

/*function zz($z1,$z2){
	$z1=34;
	$z2=80;
	for($z4=$z1 % $z2;
		$z1=$z2;
		$z2=$z4){
	if($z2==!0){
		$z1=$z1;
		}
		return $z1;
	  }
	  echo $z1;

	}*/
	function cc($a,$b){
		if($b==0){
			$cc2 =$a*$b;
			return $a;
		}else{
			return cc($b,($a%$b)); 

		}
     
	}
	$cc1=cc(34,80);
	
	$cc3=$cc2/$cc1;
	echo $cc1."<br>".$cc3;
	
 $num1 =[
    1=>22,
    2=>23,
    "num"=>"n1234",

 ];
 dump($num1);
 




