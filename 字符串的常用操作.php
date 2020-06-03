<?php  
// 如何引用字符串
        //单引号引用的各种字符,字符直接输出
        echo "1.如何引用字符串:"."<br>"; 
        $a='mystring';     
        $b='a'.$a;
        echo   "单引号引用字符串b：".$b."<br>" ;

        //显示特殊字符 ‘ 与  \ 时需要加上转移字符 \
        $c='l like \'this\' KFC\\ food';       
        echo  "显示特殊字符c：".$c."<br>" ;

		//双引号引用时普通字符显示原义
		$d="mystring";
		
		echo "双引号引用字符串d："."php $d"."<br>";
		
		//显示"或$a,需要转移字符
		echo "显示特殊字符："."love\$d\"chinese\"food"."<br>";
		//利用heredoc把多行数据引入到字符串中
		$s = <<<EOD
		Example,
		of,
		string
		EOD;
		echo  "利用heredoc把多行数据引入到字符串中:".$s."<br>";

//字符串的输出
echo "<br>";
echo "2.字符串的输出:"."<br>";
		// echo  echo可以输出多值；通过用逗号分隔，指定输出多个选项
        $e="123";
        $f="abc";
        echo "echo显示多个值：".$e." ",$f."<br>";

		// printf( )
		//按照要求输出不同类型的值
		/* %后面添加参数
		b 代表显示二进制  
		d代表显示十进制 
		o为八进制 
		X 显示大写字母的十六进制
		x 显示小写字母的十六进制*/
		printf('printf示例： the value of  %d  is  %x',214,214); 


		// print( )
		//在print( )中只有一个参数，传送一个值
		echo"<br>";
		echo "print( )示例：";
		print("hello,PHP");

		// sprintf( )
		echo"<br>";
		$date=sprintf("%d is %f",213,213);
		echo "sprintf( )示例：".$date."<br>";
		
			
// 字符串的比较
	
echo "<br>";
		echo "3.字符串的比较:";
		// 		strcmp( )；
		// 		从左到右逐个比较 ，
		//      前面的ASC码大就为正,后面的ASC码大显示负值
		
		echo"<br>";
		$g =strcmp("php1", "php2") ;   
		echo "strcmp( )函数示例：".$g."<br>"; 
		//strcasecmp(s1,s2);
		// 若参数s1和s2字符串相等则返回0。
		// s1大于s2则返回大于0 的值，
		// s1 小于s2 则返回小于0的值。
		$h=strcasecmp("Aa","aa");
		echo "strcasecmp()函数比较结果：".$h."<br>";
		//strncmp(string1,string2,length ) 
		$i=strncmp("aaa1", "aaa2",3);//确定位数的比较
		echo  "strcasecmp()函数确定位数比较结果：".$i."<br>"; 


// 字符串的查找 
		echo "<br>";
		echo "4.字符串的查找 :"."<br>";
	
		//substr( string , start , length)
		// 函数从字符串string中取出字符
		// 从start位置取出length长度的字符，字符串位置开始值为零
		// 如果没有指出length，那么默认一直到字符串末尾
		$name= "let us try  this function";
		$result=substr($name,5,4);//从零开始数到第五个字符开始，取出的长度为4个字符
		echo "substr()函数示例：".$result."<br>";
        

		// substr_count(bigstring,smallstring); 
		//返回small-string字符串在big-string字符串里出现的次数
		$bigstring="abcabcabeabc";
		$smallstring="abc";
	
		echo"substr_count()函数示例：".substr_count($bigstring,$smallstring)."<br>";



		//substr_replace(oldstring,newstring,start,length)
		// 在原字符串中插入新字符串
		// start 是替换的位置，length是替换的位数
		// 如果length为零，直接插入不替换原来的内容
		// 如果length 没有数值，后面的内容全部替换
		// start数值为正数: 从左向右移动替换位置
		// start数值为负数: 从右向左移动


		$oldstring="abcdef";
		$newstring="PHP";

		echo"substr_replace()函数示例：".substr_replace($oldstring,$newstring,3,0)."<br>";




// 字符串的处理
echo "<br>";
echo"5.字符串的处理："."<br>";
		$test='abc  pHP  ';
		echo "原字符串输出："."<br>".$test."<br>";
		//删除空白符
		       //删除字符串的开始和结尾的空白符
				echo "删除删除字符串的开始和结尾的空白符："."<br>".trim($test)."<br>";
				echo"strlen()显示字符串的字符的个数:".strlen($test)."<br>";
				//ltrim( string)     删除字符串开始的空白
				// rtrim( string)     删除字符串结尾的空白
				//strlen()显示字符串的字符的个数;
		//改变字符串大小写
				// 所有字符变为小写
				echo "所有字符变为小写:".Strtolower($test)."<br>";

				// 所有字符变为大写
				echo "所有字符变为大写:".Strtoupper($test)."<br>";
				 
				// 字符第一个字母变为大写 
				echo "字符第一个字母变为大写:".Ucfirst($test)."<br>";	
			    // 字符串中单词第一个字母变为大写 
			    echo "字符串第一个字母变为大写:".Ucwords($test)."<br>";     
				  
		//翻转字符串
				echo "字符串翻转:".strrev( $test)."<br>";

		// 重复count次string参数组成的新字符串
		// echo str_repeat(‘-’,20);
				 echo "重复拼接:".str_repeat($test,3)."<br>";
				

        //字符串查找函数，返回出现的位置
				 //查找smallstring在largestring第一次出现的位置
				 $oldstring="abcabcabcabc";
				 $newstring="abc";
				 echo "查找newstring在oldstring最后一次出现的位置:".strrpos($oldstring,$newstring)."<br>";
		
		//函数str_pad(string,length,type)
		
		$a="hello thiz linux";   
		$b= "@";   
		$c=str_pad($a,25,$b)  ;    
		echo "str_pad()函数的实现效果：".$c."<br>";
		
		//strtok (string,分割标记)
		
		$a="stringstring";
		$b=strtok($a,"s"); 
		echo"strtok分割函数输出示例："."<br>";
		while($b !== false ) 
		{
		    echo $b."<br>";
		    $b=strtok("s");
		} 



?>