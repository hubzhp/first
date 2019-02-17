<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>denglu</title>
</head>
<body>
	<?php
	echo '<meta charset="utf8">';
	$b=$_GET['a'];
	echo"$b";
	?>
	<form action="sousuo.php" method="post">
		<input name='bozhuname' type='hidden' value="<?php echo $_GET['a'];?>">
		<legend> 您的大作</legend>
		题目：<input type="text" name="title"><br><br>
   		博文：<textarea name="contain" rows="20" cols="40"></textarea><br><br>
   		<input type="submit" name="submit" value="发表">

	</form>
	<?php
	echo "<br><a href='afterlogin.php?a=$_GET[a]'>返回主页</a><br>";
	?>
</body>
</html>


