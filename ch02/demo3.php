<?php
	$arr=[1,2,3,'username'=>'qin'];
	$arr2=[4,5,6,'username'=>'shou'];
	$a=$arr+$arr2; // 按索引来排的  相加的时候索引一样去左边的数组
	echo '<pre>';
	print_r($a);
	echo '</pre>';
?>