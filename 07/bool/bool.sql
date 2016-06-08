布尔商城sql语句
栏目表：

create table category(
cat_id int auto_increment primary key,
cat_name varchar(20) ,
intro varchar(100) ,
parent_id int
)engine myisam charset utf8;
