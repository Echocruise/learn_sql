<?php
  $con=mysql_connect("localhost:3306","root","")
    or die("数据库服务器连接失败！<br>");
//**********found**********
  __________("db_mall",$con) or die( "数据库选择失败！<br>");
//**********found**********
  mysql_query("set __________ 'gbk'");
//**********found**********
  $sql="__________ tb_commodity SET price=3888";
//**********found**********
  $sql=$sql." ________ cname='电冰箱' AND origin='武汉'";
//**********found**********
  if (mysql_query(__________,$con))
      echo "商品价格修改成功！<br>";
  else
      echo "商品价格修改失败！<br>";
?>
