<?php 
	$flag =0;
	$A =5;

	while($A >0)
	{
	   $A--;
	   $flag++;
	}
	echo "while循环次数为：".$flag."次"."<br>";//while循环示例


	do{
		$A--;
		$flag++;
	}
	while($A >0);

	echo "do...while循环次数为：".$flag."次"."<br>";//do...while循环示例


    $B=0;
	for($A=5;$A>0; $A--)
	{
	   $B++;
	}
    echo "for循环次数为：".$B."次"."<br>";//for循环示例


 echo "索引数组的循环输出："."<br>";
    $arr=[1,2,3,4,5,6];
	foreach($arr as $value){
	
	echo "数组中的元素为：".$value."<br>";   //foreach循环输出索引数组示例
	}


 echo "关联数组的循环输出："."<br>";

    $arr01=array("name"=>"joan","num"=>"9018","email"=>"abc@abc.com");//foreach循环输出关联数组示例
	 foreach($arr01 as $key => $value){ 
	        echo  "数组中的元素为：".$value."<br>";        
	   } 


?>