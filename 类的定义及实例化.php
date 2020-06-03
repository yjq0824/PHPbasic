 
<?php
	class Ctest                            	//定义一个类Ctest
	{
		var $stunumber;                    	//声明一个属性
		function add ($str)                	//声明一个方法
		{
		$this->stunumber =$str;         //使用$this指针引用类内部的属性
		echo $this->stunumber;
		}
	}
		$obj =new Ctest;                        	//创建Ctest类的一个对象$obj

		//调用类对象的方法及属性
		$obj->add('123');
		echo "<br>";
		echo $obj->stunumber;
		
?>
