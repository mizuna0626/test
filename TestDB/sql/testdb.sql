drop database if exists testdb;
create database testdb;
use testdb;
create table test_table(
name int,
age varchar(255),
Mail varchar(255)
);
insert into test_table values(1,

"Yamada",21,"xxx@yahoo.co.jp"
,
"123");
insert into test_table values(2,

"Sato",39,"yyy@google.com"
,
"456");
insert into test_table values(3,
"Harada",44,,"zzz@yahoo.co.jp");