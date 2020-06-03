

<?php 	
	$arrY01=array();
		for ($i=0;$i<5;$i++)//break语句效果演示
		{
		  
		    $arrY01[$i]=$i; 

		    break;	     
		}
	echo "break语句演示结果："."<br>";
    var_dump($arrY01);


echo "<br><br>";
    $arrY02=array();
		for ($j=0;$j<5;$j++)//break语句效果演示
		{
		  
		    $arrY02[$j]=$j; 

		    continue;	     
		}
	echo "continue语句演示结果："."<br>";
    var_dump($arrY02)."<br>";

echo"<br><br>";
echo "exit语句演示结果(直接退出程序)（无结果）："."<br>";
    $arrY03=array();
		for ($x=0;$x<5;$x++)//break语句效果演示
		{
		  
		    $arrY03[$x]=$x; 

		    exit;	     
		}
	
    var_dump($arrY03)."<br>";
?>
