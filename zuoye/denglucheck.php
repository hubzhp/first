<?php
echo '<meta charset="utf8">';
if(!isset($_POST['username']) && !isset($_POST['password']) )
	
	{
		echo "username or password can\'t be null";
	}
	$con=mysql_connect('localhost','root','');
	if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }		mysql_select_db("test");   
 	$result=mysql_query("select name,password from bozhu where name=${_POST['username']}");
 	$row = mysql_fetch_array($result);
 	 //var_dump($row);
 	if(!$row['name']){
 		echo "还未注册";
 	}else{
 		$code=md5($_POST['password']);
 		if($code==$row['password']){
 			echo "登录成功<br>";
 			$s=$row['name'];
 			echo "你好   $s<br>";
 			echo "<a href='afterlogin.php?a=$row[name]'>进入博客</a>";
 			}
		else {
				echo '<script language="javascript" type="text/javascript">
		alert("密码或用户名错误 ");window.location.href="denglu.php"; </script>';
			}
		}
?>