<?php
	
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>一个小页面</title>
	<style type="text/css">
		header{width: 100%;height: 30px;margin: 0 auto;border: 0px solid red;background: antiquewhite;}
		nav{width: 100%;height: 20px;margin: 0 auto;border: 0px solid red;margin-top: 4px;background: yellow;}
		article{width: 100%;height: 400px;margin: 0 auto;border: 1px solid red;margin-top: 4px;background: orangered;}
		aside{width: 70%;height: 398px;float: left;background: saddlebrown;color:orange;}
		section{width: 29.8%;height: 398px;border: 1px solid yellow;float: right;}
		footer{width: 100%;height: 60px;margin: 0 auto;border: 0px solid red;margin-top: 4px;background: darkslategrey;}
	</style>
</head>
<body>
	<header></header>
	<nav></nav>
	<article>
		<aside>
			<?php
			// 倒序
				for($i=9;$i>=1;$i--){
					for($j=1;$j<=$i;$j++){
						echo "$j*$i=".$i*$j.' ';
					}
					echo '<br />';
				}	
				echo '<br />';
			// 正序
				for($i=1;$i<=9;$i++){
					for($j=1;$j<=$i;$j++){
						echo "$j*$i=".$i*$j.' ';
					}
					echo '<br />';
				}	
			?>
		</aside>
		<section>
			<?php
				$a=['ss'=>'s',11,12.6,'sd'];
				echo '<pre>';
				print_r($a);
				echo '</pre>';	
				echo '<br />';
				 for($i=1;$i<=4;$i++){
			  	 	for($j=4;$j>=$i;$j--){
			  	 		echo "&nbsp;&nbsp;";
			  	 	}
					for($k=1;$k<=$i*2-1;$k++){
						echo '*';
					}
					echo '<br />';
			  	 }
				 for($i=1;$i<=3;$i++){
				 	for($j=0;$j<=$i;$j++){
				 		echo "&nbsp;&nbsp;";
				 	}
				 	for($k=1;$k<=7-2*$i;$k++){
				 		echo '*';
				 	}
					echo '<br />';
	 			}
			?>
		</section>
	</article>
	<footer></footer>
</body>
</html>