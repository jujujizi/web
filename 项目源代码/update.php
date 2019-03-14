<center>
<?php
error_reporting(0); 
session_start();
if(isset($_SESSION["username"]))
{  
$db=mysql_connect("localhost","root","123");
 mysql_select_db("schoolsecondtrade",$db);
 $check=mysql_query("select * from goods where goodsnumber='".$_POST["goodsnumber"]."' and sellernumber='".$_POST["sellernumber"]."'");
 $c=mysql_num_rows($check);
 if($c==0){
 echo "用户未出售此商品编号的商品！请重新填写！";
 echo "请点击此处<a href=update.html>返回</a>重试";}
 else{
 $insert=mysql_query("update goods set price='".$_POST["price"]."' where goodsnumber='".$_POST["goodsnumber"]."'") ;
 echo "商品数据修改成功！可跳转至<a href=buy.php>购买商品页面</a>查看";}
}
else{ echo "请先<a href=login.html>登录</a> ";
      echo "<a href=register.html>免费注册</a>";}
?>
</center>