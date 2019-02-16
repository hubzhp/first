<?php
echo '<meta charset="utf8">';
	if(!isset($_POST['username']) && !isset($_POST['password']))
	{
		exit('username or password can\'t be null');
	}

	if(strlen($_POST['password']) < 8 &&
	!preg_match("/(?=.*[A-Z])(?=.*[a-z])(?=.*[0-9])[A-Za-z0-9]/", $_POST['password']))
	{
		exit('密码须包括大小写字母及数字，长度需大于8位');
	}else{ 
		$con=mysqli_connect('localhost','root','');
		if (!$con)
  		{
  		die('Could not connect: ' . mysqli_error());
  		echo "连接失败";
  		}	else echo "你好";	
  		mysql_select_db("test");
 	}
 	$result = mysql_query("select name from bozhu where name=${_POST['username']}");
	$row = mysql_fetch_array($result);
 	if($row){
 		echo "已被注册";
 	}else{
 		$password = md5($_POST['password']);
 		$sql = "INSERT into bozhu values ('${_POST['username']}','$password')";
 		mysql_query($sql);
		echo "注册成功";
		$a=mysql_fetch_array($sql);
		echo "$a";
 		
		sleep(2);
		echo '<script language="javascript" type="text/javascript">
		alert("注册成功");window.location.href="denglu.php"; </script>';
	}
?>