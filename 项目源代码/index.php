<center>
<?php
error_reporting(0); 
session_start();

if(isset($_SESSION["username"]))
{     $r=$_SESSION["username"];
      echo "{$r},欢迎回来!";
      echo " <a href=logout.php>注销</a>";}
else{ echo "请先<a href=login.html>登录</a> ";
      echo "<a href=register.html>免费注册</a>";}

?>
</center>
<center>
<img src="./index.jpg">
<br>
<p><p>
<table>
<tr>
<td><form action=search.html method="post">
<button type="subject" style="width:150px; height:80px;background-color:#64afcc">搜索商品</button>
<font style="color:#ffffff;">白色</font>
</form></td>
<td><form action=buy.php method="post">
<button type="subject" style="width:150px; height:80px;background-color:#64afcc">购买商品</button>
<font style="color:#ffffff;">白色</font>
</form></td>
<td><form action=sell.html method="post">
<button type="subject" style="width:150px; height:80px;background-color:#64afcc">出售商品</button>
<font style="color:#ffffff;">白色</font>
</form></td>
<td><form action=update.html method="post">
<button type="subject" style="width:150px; height:80px;background-color:#64afcc">修改商品信息</button>
<font style="color:#ffffff;">白色</font>
</form></td></tr>
</center>