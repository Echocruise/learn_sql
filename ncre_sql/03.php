<html>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<head><title>成绩登录页面</title>
<style type="text/css">
<!--
.STYLE1 {font-size: 15px; font-family: "幼圆";}
-->
</style>
</head>
<body>
    <div align="center"><font face="幼圆" size="5" color="#008000">
					<b>课程成绩录入</b></font></div><br><br>
<form name="frm1" method="post">
<table width="300" align="center">
<tr><td width="120"><span class="STYLE1">根据学号查询:</span></td>
	<td><input name="SNumber" id="SNumber" type="text" size="10">
		<input type="submit" name="select" class="STYLE1" value="查找"></td></tr>
</table>
</form>
<?php
$conn=mysql_connect("localhost","root","") or die("连接失败");
mysql_select_db("db_student",$conn) or die("连接数据库失败");
mysql_query("SET NAMES 'gb2312'");
$SNumber=@$_POST['SNumber'];
//**********found**********
$sql="select sno,sname,smajor from tb_student where sno=SNumber";#
$result=mysql_query($sql);
$row=@mysql_fetch_array($result);
if(($SNumber!==NULL)&&(!$row))
	echo "<script>alert('该学生信息不存在！')</script>";
?>
<form name="frm2" method="post">
<table bgcolor="#CCCCCC" width="300" border="1" align="center" cellpadding="0" cellspacing="0">
<tr>	<td bgcolor="#CCCCCC" width="90"><span class="STYLE1">学号:</span></td>
	<td><input name="SNum" type="text" class="STYLE1" value="<?php echo $row['sno']; ?>">
		<input name="h_SNum" type="hidden" value="<?php echo $row['sno']; ?>"></td></tr>
<tr>	<td bgcolor="#CCCCCC" width="90"><span class="STYLE1">姓名:</span></td>
<!-- **********found********** -->
	<td><input name="SName" type="text" class="STYLE1" value="<?php echo $row[_______]; ?>"></td></tr>
<tr><td bgcolor="#CCCCCC"><div class="STYLE1">专业:</div></td>
	<td><input name="SMajor" type="text" class="STYLE1"
				value="<?php echo $row['smajor']; ?>"></td></tr>
<tr><td bgcolor="#CCCCCC"><span class="STYLE1">课程名:</span></td>
	<td><input name="CName" type="text" class="STYLE1"
				value=""></td></tr>
<tr><td bgcolor="#CCCCCC"><span class="STYLE1">成绩:</span></td>
	<td><input name="KCGrade" type="text" class="STYLE1"
				value=""></td></tr>
<tr><td  align="center" colspan="2" bgcolor="#CCCCCC">
	<input name="b" type="submit" value="添加" class="STYLE1">&nbsp;
	</td></tr>
</table>
</form>
</body>
</html>

<?php
$XH=@$_POST['SNum'];
$h_XH=@$_POST['h_SNum'];
$XM=@$_POST['SName'];
$ZY=@$_POST['SMajor'];
$KCM=@$_POST['CName'];
$CJ=@$_POST['KCGrade'];

//**********found**********
if(@$_ ______________=='添加')#
{
        if(!$XH){
	    echo "<script>alert('学号不能为空!');location.href='sj3.php';</script>";
            exit;
        }
	elseif(!$KCM){
    	    echo "<script>alert('课程名不能为空!');location.href='sj3.php';</script>";
            exit;
        }
	elseif(!$CJ){
    	    echo "<script>alert('成绩不能为空!');location.href='sj3.php';</script>";
	    exit;
        }

	$s_sql="select sno，cname from tb_score where sno='$XH' and cname='$KCM'";
	$s_result=mysql_query($s_sql);
	$s_row=@mysql_fetch_array($s_result);
        if(!$s_row){
//**********found**********
	$insert_sql="insert into tb_score(sno,cname,grade) values(____________________)";#
		$insert_result=mysql_query($insert_sql) or die('添加失败！');
//**********found**********
	if(mysql_affected_rows(______)!=0)#
     	 	echo "<script>alert('添加成功!');</script>";
	}
}
?>
