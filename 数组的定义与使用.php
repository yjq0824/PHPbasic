<?php 


//一维数组的定义与使用
 echo "索引数组的循环输出："."<br>";
    $arr=[1,2,3,4,5,6];
	foreach($arr as $value){
	
	echo "数组中的元素为：".$value."<br>";   //foreach循环输出索引数组示例
	}

	echo "debug输出"."<br>";
    var_dump($arr);//debug输出


echo "<br><br>";
 echo "关联数组的循环输出："."<br>";

    $arr01=array("name"=>"joan","num"=>"9018","email"=>"abc@abc.com");
    //foreach循环输出关联数组示例
	 foreach($arr01 as $key => $value){ 
	        echo  "数组中的元素为：".$value."<br>";        
	   } 
	 
	   echo "debug输出"."<br>";
	   var_dump($arr01);//debug输出


//二维数组的定义与使用
echo "<br><br>";
echo "二维索引数组的循环输出："."<br>";
$array01= array( 0,1,2 );
$array02= array('a','b','c');
$array = array($array01,$array02);


foreach($array as $value){
	foreach($value as $value2){
		
	echo "数组中的元素为：".$value2."<br>";
	}
}

echo "debug输出"."<br>";
var_dump($array);//debug输出


echo "<br><br>";
echo "二维关联数组的循环输出："."<br>";
$arr = array('one'=>array('name'=>'张三','age'=>'23','sex'=>'男'),
			'two'=>array('name'=>'李四','age'=>'43','sex'=>'女'),
			'three'=>array('name'=>'王五','age'=>'32','sex'=>'男'),
			'four'=>array('name'=>'赵六','age'=>'12','sex'=>'女'));

foreach($arr as $key=>$value){
	foreach($value as $key2=>$value2){
		var_dump($value2);
	
	}
}

echo "debug输出"."<br>";

print_r($arr);


?>