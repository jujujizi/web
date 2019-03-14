<center>
<?php
error_reporting(0); 
session_start();
if(isset($_SESSION["username"]))
{  
$db=mysql_connect("localhost","root","123");
 mysql_select_db("schoolsecondtrade",$db);
 $check=mysql_query("select * from goods where goodsnumber='".$_POST["goodsnumber"]."'");
 $c=mysql_num_rows($check);
 if($c>=1){
 echo "商品编号已存在！请重新填写！";
 echo "请点击此处<a href=sell.html>返回</a>重试";}
 else{
 $insert=mysql_query("insert into goods values('".$_POST["goodsnumber"]."','".$_POST["goodsname"]."','".$_POST["price"]."','".$_POST["quantity"]."','".$_POST["sellernumber"]."','".$_POST["sellername"]."','".$_POST["school"]."')");
 echo "商品数据上传成功！可跳转至<a href=buy.php>购买商品页面</a>查看";}
}
else{ echo "请先<a href=login.html>登录</a> ";
      echo "<a href=register.html>免费注册</a>";}
?>
</center>
