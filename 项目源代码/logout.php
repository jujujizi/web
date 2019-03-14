<?php
error_reporting(0);
session_start();
if(isset($_SESSION["username"]))
{  session_destroy();
   echo "注销成功！请点击此处<a href=index.php>返回主页</a>";}
else{ echo "未登录，无法注销！请点击此处<a href=index.php>返回主页</a>";}
?>