<?php 
	$userpass = "admi888";//定义密码
	$strlen = strlen($userpass);//获取密码长度
	for ($i=0; $i <$strlen ; $i++) 
	{ 
	$c=$userpass[$i];//提取每个字符
	$asc=ord($c);//转换为ASCII
	$asc=$asc^3;//位运算：异或运算
	$d = chr($asc);//吧ASCII转换为字符
	$newpass.=$d;
	}
    echo "位运算符^示例："."<br>";//异或运算
	echo "你的原密码是：".$userpass."<br>";
	echo "你的新密码是：".$newpass."<br><br>";


	echo "三元运算符？：示例："."<br>";	
	$a=date("D",time());//获取时间
	echo ($a=="Sat"||$a=="Sun")?"今天可以休息！":"今天正常上班！";

	//求根公式表达式示例：
	$x=-($B)+sqrt(pow($B,2)-4*$A*$C)/(2*$A);

 ?>