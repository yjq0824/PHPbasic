<?php 


function add($a,$b)//函数的定义；
{
	$c=$a+$b;
	return $c;
}

add(1,2);//函数的调用，参数传递

echo "函数的调用结果为：";
echo add(1,2);
echo "<br><br>";


//可变函数的使用
$fun="add";
echo "可变函数的调用结果为：";
echo $fun(1,2)."<br>";
echo "<br>";



//函数的嵌套

function sum(){
	$num=4;
	$sum=$num+add(1,2);
	// echo "add(1,2):".add(1,2)."<br>";
	return $sum;
}

echo "嵌套函数的输出结果为：".sum();
echo "<br><br>";


function digui($i){
	echo "这是一个递归调用函数！"."<br>";
	$i--;
	if($i<=0){
		echo "循环调用完毕！";
		return 0;
	}
	digui($i);
}
echo digui(3);
?>