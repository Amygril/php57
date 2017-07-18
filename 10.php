 <?php
 header("content-type:text/html;charset=utf-8");
// 定义CMMON文件夹路径
$dir= __DIR__;
$dir =str_replace("\\","/",$dir);
define('COMMON_PATH',$dir."./common/");
// 调用函数；
require_once COMMON_PATH."function1.php";
f1();



$name ="张同学";
$hobby ="吃饭睡觉";
$age = 24;
function aa($n,$h,$a){
	printf("姓名: %s 年龄: %d 爱好: %s",$n,$h,$a);
}

aa($name,$age,$hobby);
// 用户提交的验证码
$code ="S1cj";
$pass ="123456";
// 程序中保存的验证码密码
$captcha ="S1Cj";
$passdrow ="123456";
if(strtoupper($code) ===$captcha){
	// strtoupper是大小写的转换；
	if(strtoupper($pass)===$passdorw){
		echo "登陆成功";
	}else{
		echo "用户名或密码错误";
	}
}else{
	echo "验证失败";
}

$code ="S1cj";
$pass ="  123456";
// 程序中保存的验证码及密码
$captcha ="S1CJ";
$password ="123456";

if (strtoupper($code) ===$captcha) {
	// echo "验证正确";
	if (trim($pass) === $password) {
		echo "登录成功！";
	}else{
		echo "用户名或者密码错误";
	}
}else{
	echo "验证失败";

}


$str ="www.oa.com/admid/indext";
$res =explode("/",$str);
dump($res);
$str2 ="SASDFNBJHSNBJMJ";
$res=str_split($str2,2);
dump($res);
echo strrpos($str2,"A");
echo "<br>";

$file="a.html.php";
// $pos =strrpos($file,".");
// $type =substr($file,$pos);

// $type =strrpos($file,".");
$file=str_shuffle($file);
echo $file;

$str ="shr111\"sstr222";
// \"  转换符 转变为双引号，浏览器不能解析转义符；
$str ="str111\r\nsstr2222";

echo $str;

