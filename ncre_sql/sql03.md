## summary
## 基本操作
在考生文件夹给出的学生数据库 db_student中有学生表 tb_student和课程成绩表 tb_score, tb_student包含的字段有sno(学号)、sname(姓名)、sage(年龄)和 smajor(专业), tb_score包含的字段有sno(学号)、 cname(课程名称)和 grade(成绩)。
1. 在 tb_student表中添加一个字段sex,数据类型为char,长度为1,缺省值为“M"
  - 分析
    - 只会 alter table tb_student
    - 添加字段 add
    - 长度（1）
    - 缺省default 'M
  - 代码
  ```sql
  alter table tb_student add sex char(1) default 'M';
  ```
2. 学号为100的学生的专业改为“计算机”
  - 分析
    - update set
  - 代码
  ```SQL
update tb_student set  smajor = "计算机" where sno = 100;
  ```
3. tb_score表上建立一个视图 v_avg(cname; average),视图的内容包含课程名称及课程的平均成绩
  ```SQL
  create view v_avg(cname;average) as select from cnmae,average(grade) from tb_score group by cname;
  ```
4. tb_student表上建立关于学号的唯一性索引idx_stu
  - 分析 不会建立索引
  ```SQL
  alter table tb_student add unique index idxstu(sno);
  ```

5. 新建一个名称为 newuser的用户,主机名为 localhost,并为其授予对 tb student表的 select权限。
  ```SQL
  create user 'newuser'@'localhost' ;
  grant select on tb_student to 'newuser'@'localhost' with grant option ;
  ```

## 简单应用
1.设计一个名称为fin_cmax的存储函数,根据给定的课程名返回选修该课程的最高分,并写出调用函数的语句。
```sql
DELIMITER $$
CREATE function fn_cmax(cn CHAR(20)) --
RETURNS int
DETERMINISTIC
BEGIN
	DECLARE tmp INT;
	SELECT max(grade) INTO tmp--
	FROM tb_score
	WHERE cname=cn;
	RETURN tmp;--
END $$
DELIMITER ;
```
2.设计一个名称为 ev_bak的事件,每日将学生数据库db_student中学生表tb_student的数据备份到考生文件夹下的文件 bakfile.txt
中
```sql
DELIMITER $$
CREATE event ev_bak ON　SCHEDULE every 1 DAY ---
DO
BEGIN
    SELECT * FROM tb_student INTO OUTFILE 'bakfile.txt' FIELDS TERMINATED BY ',';--
END
```
