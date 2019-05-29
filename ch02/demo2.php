<?php
	$arr=array(
		'aa'=>array('a'=>'apache','b'=>'mysql'),
		'bb'=>array(1,2,3,4),
		'cc'=>array('张三','李四')
	);
	
	foreach($arr as $key=>$val){
		if(is_array($val)){
			foreach($val as $newkey=>$newval){
				echo $newkey.'=>'.$newval.'<br />';
			}
		}
	}
	echo '<br />';
	
	// 这是个函数是搞 数组是几维的
	function checkarr($strarr){
		if(!is_array($strarr)){
			return 0;
		}else{
			$num=0;
			foreach($strarr as $val){
				$temp=checkarr($val);
				if($temp>$num){
					$num=$temp;
				}
				return $num+1;
			}
		}
	}
	$arr2[][][][][][][]=456;
	echo checkarr($arr2);
?>