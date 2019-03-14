<?php
error_reporting(0); 
if($_POST["mima"]==$_POST["mima1"])
{ $db=mysql_connect("localhost","root","123");
 mysql_select_db("schoolsecondtrade",$db);
 $check=mysql_query("select * from student where username='".$_POST["username"]."'");
 $rows=mysql_num_rows($check);
 if($rows>=1){
 echo "用户名已存在！请重新注册！";
 echo "请点击此处<a href=register.html>返回</a>重试";}
 else{
 $sql="insert into student values('".$_POST["number"]."','".$_POST["username"]."','".$_POST["mima"]."','".$_POST["sex"]."','".$_POST["school"]."')"; 
 mysql_query($sql);
 echo $_POST["username"];
 echo "用户注册成功！请点击此处<a href=login.html>登录</a>";
 }
}
else {echo "两次输入的密码不一致！请点击此处<a href=register.html>返回</a>重试";}
?>