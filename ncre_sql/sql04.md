## 基本操作
1. 在数据库 mysqltest中,创建Dept1表: Deptl(( deptno, dname, higherdeptnoo),说明:部门编号(整型),部门名称(定长字符串、长度20),上级部门编号(整型,缺省值为NULL),并建立名为fk_higher的主外键关联。
2. 现有部门表:Dept2( deptno, dname, higherdeptno)(说明:部门编号,部门名称,上级部门编号),请编写SQ语句,在Dept2中添加一条记录, deptno为9, dname为“ newdept", higherdeptno为空
3. 学生S(sno, sname,sex,age)、课程c(cno, cname)、选课sc(sno;cno, grade),请编写SQ语句,为选修课程“JAVA的学生学号、姓名、课程成绩,建立视图 SJAVA。
4. 学生S(sno, sname,sex,age)、课程c(no, cname)、选课sC(sno;cno. grade),请编写SQL语句,将学生李红选修的课程DB的成绩改为90。
5. 创建一个名为 backup的用户,指定其仅在 localhost上登录,密码为“back叩”

## 简单应用
