<?php
error_reporting(0); 
$db=mysql_connect("localhost","root","123");
 mysql_select_db("schoolsecondtrade",$db);
$sql="select * from goods where goodsname like '%".$_POST["goodsname"]."%' and school='".$_POST["school"]."'";
$r=mysql_query($sql);
if(mysql_num_rows($r)==0)
{  echo "未搜索到类似'".$_POST["goodsname"]."'的商品，请点击此处<a href=search.html>重新搜索</a>";
}
else{   

echo "搜索到类似'".$_POST["goodsname"]."'的商品:";
echo "<hr>";
while($h=mysql_fetch_row($r))
{  
   echo "商品名：  " .$h[1]."<br>"; 
   echo "单价：   ".$h[2]."<br>";
   echo "剩余数量：   ".$h[3]."<br>";
   echo "卖家名称：   ".$h[5]."<br>";
   echo "<hr>";
}
echo "请点击此处<a href=index.php>返回主页</a>";
}
?>