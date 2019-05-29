<?php
	$arr1[][][]=10;
	$arr1[][][]=20;
	$arr1[][][]=30;
	echo '<pre>';
	print_r($arr1);
	echo '</pre>';
	echo '<br />';
	
	echo count($arr1,1); // 有三个[]*3   后面为1 代表是多维数组 0为一维数组
	echo '<br />';
	echo count($arr1,0); //二维数组的一维数组
	echo '<br />'; 
	
	
	// 判断是不是多维数组
	if(count($arr1,1)!=count($arr1,0)){
		echo '多维数组';
	}
	else{
		echo '一维数组';
	}
?>