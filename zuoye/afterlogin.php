<?php
echo '<meta charset="utf8">';
$b=$_GET['a'];
echo "用户名:$b<br><br>";
$con=mysql_connect('localhost','root','');
	if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }		mysql_select_db("test");   
$find=mysql_query("select * from bowen where name=$b");
 $jieguo= mysql_fetch_array($find);
 if(!$jieguo){
 	echo"您还没有写过文章";
	echo "<br><a href='wenzhang.php?a=$b'>新博文</a><br>";}
 else{error_reporting(0);
 	while($jieguo= mysql_fetch_array($find)){
		echo "$jieguo[time]<br>$jieguo[timu]<br><a href='contain.php?a=$jieguo[name]&b=$jieguo[timu]'>查看详情</a><br>";		}

 		echo "<br><a href='wenzhang.php?a=$b'>新博文</a><br>";		
 	}
?>