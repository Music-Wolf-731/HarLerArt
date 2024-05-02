drop database if exists shop;
create database shop default character set utf8 collate utf8_general_ci;
grant all on shop.* to 'staff'@'localhost' identified by 'password';
use shop;

create table product (
	id int auto_increment primary key, 
	name varchar(200) not null, 
	price int not null
);

insert into product values(null, '松果', 700);
insert into product values(null, '核桃', 270);
insert into product values(null, '葵花子', 210);
insert into product values(null, '杏仁', 220);
insert into product values(null, '腰果', 250);
insert into product values(null, '巨人玉米', 180);
insert into product values(null, '開心果', 310);
insert into product values(null, '夏威夷豆', 600);
insert into product values(null, '南瓜子', 180);
insert into product values(null, '花生', 150);
insert into product values(null, '枸杞', 400);

