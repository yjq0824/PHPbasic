<?php

    echo "if语句示例:"."<br>";
    $score =89;      //定义变量
    if($score >=60)     //判断是否符合条件
	{
		echo"及格"."<br>";
	}
		
	echo "if...else语句示例:"."<br>";	
	$score=89;      //定义变量
	if($score>=60)     //判断是否符合条件
	{
		echo"及格"."<br>";
	}
	else    
	{
		echo"不及格"."<br>";
    }


    echo "if…elseif…else语句示例:"."<br>";	
	$score=89;      //定义变量
	if($score>=90)     //判断是否符合条件
	{
	echo"优秀"."<br>";
	}
	elseif($score<90&& $score>=80)     //判断是否符合条件
	{
	echo"良好"."<br>";
	}
	elseif($score<80&& $score>=70)     //判断是否符合条件
	{
	echo"中等"."<br>";
	}
	elseif($score<70&& $score>=60)     //判断是否符合条件
	{
	echo"及格"."<br>";
	}
	else    
	{
	echo"不及格"."<br>";
	}

    echo "switch语句示例:"."<br>";
    $score=89; 
    switch ($score) 
    {
    	case $score>=90:
    	    echo "成绩优秀"."<br>";
    	    break;
    	case $score>=80:
    		
    	    echo "成绩良好"."<br>";
    	    break;
    	case $score>=70:
    		echo "成绩中等"."<br>";
    		break;
        case $score>=60:
    		echo "成绩合格"."<br>";
    		break;
    	
    	default:
    		echo "成绩不合格"."<br>";
            break;
    }
		 
	
		
?>
