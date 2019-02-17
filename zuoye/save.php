<?php
//echo '<meta charset="utf8">';
mysql_query("set names 'utf8'");
$con=mysql_connect('localhost','root','');
	if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }		mysql_select_db("test");  
  error_reporting(0); 
  $sql = "INSERT into comments values ('${_POST[name]}','${_POST[title]}','${_POST[comment]}')";
mysql_query($sql);
 	//echo "${_POST[name]}${_POST[title]}${_POST[comment]}";
 	header("location:contain.php?a=${_POST[name]}&b=${_POST[title]}");


?>