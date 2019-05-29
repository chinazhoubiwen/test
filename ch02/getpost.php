<?php
	header("content-type:text/html;charset=utf-8");
	$getid=$_GET['id'];
	echo $getid;
	if(!empty($getid)){
		echo '传的ID是'.$getid;
	}
?>