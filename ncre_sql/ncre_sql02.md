## summary
## 基本操作
在考生文件夹存有一商场信息管理系统的数据库db_mall,其包含一个记录商品有关信息的商品表 tb_commodity,该表包含的字段有商品号(cm)、商品名( cname)、商品类型( ctype)、产地( ongin)、生产日期(bit)、价格( pnce)和产品说明(descr)
1.计算商品表中北京产的电视机的价格总和(字段名为:tot),并将此 SELECT语句存入考生文件夹下
2.将商品表中的产品说明(desc1)字段删除,以简化该表。
3.在商品表中添加如下一行信息,商品名:钢笔;商品类型:文具;产地:上海;生产日期:2012-12-25;价
格:25。
4在数据库db_mall中创建一个视图v_bjcommodity,要求该视图包含商品表中产地为北京的全部商品信息。
5.使用SQL语句,在当前系统中新建一个用户,用户名为 client,主机名为 localhost,并为其授予对商品表中商品号(cno)字段和商品名(cname)字段的select权限。
## 简单应用
1.请创建一个名为 tr_prce的触发器,在插入新的商品记录时,能够根据商品的品名和产地自动设置商品的价格,其具体规则下:若商品为上海产的电视机,则价格设置为2800,其它商品价格的设置可为缺省。
```SQL
DELIMITER $$
CREATE TRIGGER tri_price BEFORE INSERT ON tb_commodity FOR EACH ROW
  BEGIN
    DECLARE tmp1 CHAR(20);
    DECLARE tmp2 CHAR(20);
    SET tmp1 = NEW.cname;
    SET tmp2 = ________;
    IF (tmp1= '电视机') && (_____= '上海') THEN
      SET ________ = 2800;
  END $$
DELIMITER ;

````
2.请创建一个名为 sp_counter的存储过程,用于计算商品表 tb_commodity的商品记录数。
```SQL
DELIMITER $$
CREATE PROCEDURE sp_counter(________ ROWS INT)
BEGIN
  DECLARE cid INT;
  DECLARE FOUND BOOLEAN DEFAULT TRUE;
  DECLARE cur_cid CURSOR FOR
    SELECT cno FROM tb_commodity;
  DECLARE CONTINUE HANDLER FOR NOT FOUND
    SET FOUND=FALSE;
  SET ROWS=0;
  OPEN cur_cid;
  FETCH cur_cid INTO cid;
  WHILE FOUND DO
    SET ROWS=ROWS+1;
    ________ cur_cid INTO cid;
  END WHILE;
  ________ cur_cid;
  END $$
DELIMITER ;

```
