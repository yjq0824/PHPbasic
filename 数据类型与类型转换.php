<?php 
	$A =12;//整形
	$B ='32';//字符型
	$E =true;//布尔型
	
	//隐式转换
	$C =$A+$B;
	echo "隐式转换C：".$C."<br>";

	//显示转换
    $D=(int)$B;//原先的B值不变；
    echo "原先的B值不变B：".$B."<br>";

    echo "(int)第一种方法显示转换D：".$D."<br>";
    $D=intval($B);//字符型转化为整形
    echo "intval()第二种方法显示转换D：".$D."<br>";
 
	$D=strval($E);//将布尔型转换为字符型
	echo "strval()将布尔型转换为字符型D：".$D."<br>";
	
	$D=settype($B,"int");//将B转换为整形；返回的值为1,0，指是否转换成功；
	echo "settype()将B转换为整形 B：".$D."<br>";
?>