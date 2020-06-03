<?php  
	$R=10;//定义圆的半径
	define('pi', '3.1415');//定义π的值常量
	
	function S($r){//求面积的方法
	$s=pi*$r*$r;
	return $s;
	}
	echo "圆的面积是：".S($R);//输出面积

?>