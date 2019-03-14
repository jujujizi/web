<?php
error_reporting(0); 
session_start();
if(isset($_SESSION["username"]))
{   $db=mysql_connect("localhost","root","123");
 mysql_select_db("schoolsecondtrade",$db);
 $goodsnumber=intval($_GET["goodsnumber"]);
 $r=mysql_query("delete from goods where goodsnumber='{$goodsnumber}'");
 $sql=mysql_query("select * from goods ");
 if($sql){echo "<table border=1><tr><th>商品编号</td><th>商品名称</td><th>单价</td><th>剩余数量</td><th>卖家编号</td><th>卖家姓名</td><th>学校</td>";
 while($row=mysql_fetch_assoc($sql)){echo "<tr><td> $row[goodsnumber] <td> $row[goodsname] <td> $row[price] <td> $row[quantity] <td> $row[sellernumber] <td> $row[sellername] <td> $row[school] <td> $row[6] <a href='?goodsnumber=$row[goodsnumber]'>购买</a>";}
 echo "</table>";
 mysql_free_result($sql);
 echo "请点击此处可跳转至<a href=index.php>主页</a>查看";
}
 
}
else{ echo "请先<a href=login.html>登录</a> ";
      echo "<a href=register.html>免费注册</a>";}
?>