<?php
  $con=mysql_connect("localhost:3306","root","")
    or die("���ݿ����������ʧ�ܣ�<br>");
//**********found**********
  __________("db_mall",$con) or die( "���ݿ�ѡ��ʧ�ܣ�<br>");
//**********found**********
  mysql_query("set __________ 'gbk'");
//**********found**********
  $sql="__________ tb_commodity SET price=3888";
//**********found**********
  $sql=$sql." ________ cname='�����' AND origin='�人'";
//**********found**********
  if (mysql_query(__________,$con))
      echo "��Ʒ�۸��޸ĳɹ���<br>";
  else
      echo "��Ʒ�۸��޸�ʧ�ܣ�<br>";
?>
