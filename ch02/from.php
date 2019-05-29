<?php
	header("content-type:text/html;charset=utf-8");
	echo '<a href="getpost.php?id=1">点我getpost</a>';
	echo '<br />';
	echo '<a href="zuoye3.php?id=1">点我zuoye3</a>';
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>表单</title>
</head>
<body>
	<form action="zuoye3.php" method="post">
		<table>
			<tr>
				<td><input type="text" name="nnn"  value="" /></td>
			</tr>
			<tr>
				<td><input type="submit" value="提交" /></td>
			</tr>
		</table>
	</form>
</body>
</html>