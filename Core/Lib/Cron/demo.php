<?php

// +----------------------------------------------------------------------
// | ThinkPHP通用后台管理系统
// +----------------------------------------------------------------------
// | Copyright (c) 2013 www.4u4v.net All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: 水木清华 <admin@4u4v.net>
// +----------------------------------------------------------------------

//计划执行的文件
$fp= fopen("test.txt", "w");
if($fp) { 
	$count=0; 
	for($i=1;$i<=4;$i++){ 
		$flag=fwrite($fp,"行".$i." : "."Hello World!\r\n"); 
		if(!$flag){
			echo"写入文件失败<br>";break;         
		}
		$count+=$flag; 
	} 
}
fclose($fp);