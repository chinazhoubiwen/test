<?php
	$highlight='12';
	var_dump((bool)$highlight);
	$a=1;
?>
<!DOCTYPE html>
<html lang="zh">
<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<title>测试</title>
	<style type="text/css">
		.li{color: red;}
	</style>
</head>
<body>
	<p<?php echo $highlight<>0 ? " class='li' ": '' ?>>This is a paragraph</p>
	<p <?php if($a): ?> style="color: blue;" <?php endif; ?> >test</p>
</body>
</html>