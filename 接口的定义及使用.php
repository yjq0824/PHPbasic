<?php
	interface A    //定义A接口
	{
	    
	    function show();//接口定义抽象方法
	    
	}

	interface B extends A  //定义B接口继承A接口
	{
	    function getname();
	    
	}



	class test implements A, B//对接口A，B进行实现
    {
        function show(){   //重写接口A的show方法
              echo "我是重写接口A的方法"."<br>";
        }

        function getname(){ //重写接口B的show方法
              echo "我是重写接口B的方法";
        }
    }

    $Person=new test;
    $Person->show();
    $Person->getname();


?>
