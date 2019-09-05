
C:\wamp\bin\mysql\mysql5.5.24\data
C:\WEXAM

use db_emp
select * from tb_dept
## summary
1. insert into values
2. alter table
3. select
4. create viw
5. trigger_name
6. **function**

## 基本操作
在考生文件夹给出的企业数据库 db_emp 中有职工表 tb_employee 和部门表 tb_dept, tb_employee包含的字段有eno(职工号)、 ename(姓名)、age(年龄)、title(职务)、 salary(工资)和 deptno(部门号), tb dept包含的字段有 deptno(部门号)、 dname(部门名称)、 manager(部门负责人)、telephone(电话)。

1. 用SQL语句完成以下操作:给企业新增加一个“公关部”,部门号为“D4”,电话为“010-82953306,并任命“ Liming担任部门负责人
	```sql
insert into tb_dept(deptno, dname,manager,telephone)values('D4','公关部','liming','010-82953306');
inset into tb_employee(eno,enmae,age,title,salary,deptno)values('1119','liming','45','公关','D4');
	```

2.用SO语句将 tb_employee表中 salary字段的默认值修改为3500。
	```sql
	Alter table tb_employee alter column salary set default 3500;
	```

3.用SQL语句查询“销售部”的员工总人数,要求查询结果显示为“总人数”,并将此 SELECT语句存入考生文件夹下的sj3tx文件中。
```sql
	select count(*)
	from tb_employee
	where deptno = (select deptno from tb_dept where dname = '销售部')
```
4用SQ语句为“采购部”建立一个员工视图vemp,包括职工号(emo)、姓名( ename)、年龄(age)和工资( salary)。

```SQL
create view view_name as select from table_name where --创建视图的固定用法
create view vemp as select emo, enanme,agem,salary from tb_employee where deptno = (select deptno from tb_dept where dname = "采购部");
```
5.使用SQL语句,在当前系统中新建一个用户,用户名为 Yaoming,主机名为 localhost,密码为“abc123”
```SQL
create user'username'@'host' 'password'--创建用户的基本用法
create user 'Yaoming'@'localhost' identified by 'abc123';
```
## 简单应用
注意:下面出现的“考生文件夹”均为%USER%
在考生文件夹下给出的企业数据库db_emp中包含职工表 tb_employee和部门表tb_dept
1.设计一个名称为tr_emp的触发器,完成的功能是:当删除部门表中的记录时,将职工表中的部门信息置空。并使用命令触发该触发器,并查看结果。
```SQL
CREATE trigger tr_emp after DELETE -- trigger 触发器
ON tb_dept
FOR EACH row --固定用法 	create trigger trigger_name after delete on  
--table_name  for each row
UPDATE tb_employee
SET deptno=''
WHERE deptno=(select deptno from tb_dept);
delete from tb_dep WHERE deptno='D2';
SELECT * FROM tb_employee;
```
2.设计一个名称为fn_emp的存储函数,要求能根据给定的部门名称返回该部门的工资总和。
。
```SQL
DELIMITER $$
CREATE FUNCTION fn_emp (dept CHAR(20))
RETURNS FLOAT
DETERMINISTIC
BEGIN
Declare sum_salary float;
SELECT sum(salary) ______ sum_salary
FROM tb_employee INNER JOIN tb_dept
______ tb_employee.deptno=tb_dept.deptno
WHERE ___________
GROUP BY dname  ;
return  sum_salary ;
END $$
DELIMITER ;
```
