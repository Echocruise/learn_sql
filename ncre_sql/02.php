<?php
  $con=mysql_connect("localhost:3306","root","")
    or die("数据库服务器连接失败！<br>");
//**********found**********
  mysql_select_db("db_mall",$con) or die( "数据库选择失败！<br>");#不懂
//**********found**********
  mysql_query("set names 'gbk'");#不懂
//**********found**********
  $sql="alter table tb_commodity SET price=3888";#这个我会
//**********found**********
  $sql=$sql." where cname='电冰箱' AND origin='武汉'";#这个我也会
//**********found**********
  if (mysql_query($sql_,$con))#不懂
      echo "商品价格修改成功！<br>";
  else
      echo "商品价格修改失败！<br>";
?>
