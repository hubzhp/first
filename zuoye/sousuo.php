<?php
echo '<meta charset="utf8">';
$b=$_POST['bozhuname'];
echo"你好$b，发表成功";
$time=date("Y.m.d");
echo"$time";
$con=mysql_connect('localhost','root','');
	if (!$con){
  		die('Could not connect: ' . mysql_error());
  		}		
mysql_select_db("test");  
error_reporting(0);
$sql = "INSERT into bowen values ('$b','${_POST[contain]}','${_POST[title]}','$time')";
mysql_query($sql);
 	header("location:afterlogin.php?a=$b");






?>