<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>denglu</title>
</head>
<body>
<?php
echo '<meta charset="utf8">';
$con=mysql_connect('localhost','root','');
	if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }		mysql_select_db("test");  
  error_reporting(0); 
  //echo "你好";
  $aa=$_GET['a'];//name
$bb=$_GET['b'];//title
echo "$aa <br>$bb<br>";

  $c=mysql_query("select * from bowen where timu=$bb");
  $d=mysql_fetch_array($c);
  echo "$d[time]<br>内容：$d[neirong]<br><br>";
  

  $find=mysql_query("select * from comments where title=$bb");
 $jieguo= mysql_fetch_array($find);
 if($find){echo"hhhhh";}
echo "评论区：---><br>";
 while($jieguo= mysql_fetch_array($find)){
		echo "<br>$jieguo[comment]<br>";		}
//echo "<br><a href='newcom.php?a=$aa&b=$bb'>写评论</a><br>";
?>
<form action="save.php" method="post">
		<input name='name' type='hidden' value="<?php echo $aa;?>">
		<input name='title' type='hidden' value="<?php echo $bb;?>">
		<legend> 新评论 </legend>
   		<textarea name="comment" rows="4" cols="40"></textarea><br><br>
   		<input type="submit" name="submit" value="发表">

	</form>

</body>
</html>