<?php
error_reporting(0); 
session_start();
$db=mysql_connect("localhost","root","123");
 mysql_select_db("schoolsecondtrade",$db);
$sql="select * from student where username='".$_POST['username']."' and mima='".$_POST['mima']."' and number='".$_POST['number']."' and school='".$_POST['school']."'";
$r=mysql_query($sql);

if(mysql_num_rows($r)==1)
{  $_SESSION["username"]=$_POST['username'];
   echo "登录成功！请点击此处<a href=index.php>进入主页</a>";
 }  

else
  echo "登录失败！请点击此处<a href=login.html>返回</a>重试";
?>