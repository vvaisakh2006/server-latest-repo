<?php
$email=$_GET['email'];
$mobile=$_GET['mobile'];
$pid=$_GET['pid'];
$token=$_GET['token'];
$dbhost = "localhost";
$dbuser = "xxxxx";
$dbpass = "xxxx";
$dbnm= "xxxxx";
$con = @mysql_connect($dbhost,$dbuser,$dbpass) or die(mysql_error());
$db = @mysql_select_db($dbnm,$con) or die(mysql_error());
$query=mysql_query("select * from user where id=".$pid);
$rs=mysql_fetch_assoc($query);
if(!$rs)
{
$sql="INSERT INTO user(`id`,`email`,`mobile`)VALUES($pid,'$email',$mobile)";
$result=mysql_query($sql) or die(mysql_error());
$sql="INSERT INTO device(`id`,`token`)VALUES($pid,'$token')";
$result=mysql_query($sql) or die(mysql_error());
}
?>

