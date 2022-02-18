use flowers;

create table users
(
id int primary key auto_increment,
login varchar(25) not null,
password varchar(64) not null,
name varchar(50) not null
);

select * from users;

insert into users(login, password, name)
values ('customer', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3','Покупатель');


insert into users(login,password,name,access) values ('admin', '8c6976e5b5410415bde908bd4dee15dfb167a9c873fc4bb8a81f6f2ab448a918', 'Администратор', 'admin');

create table user_cart
(
id int primary key auto_increment,
boquet int not null,
count int not null,
user int not null,
constraint fk_cart_bq foreign key (boquet) references boquets(id),
constraint fk_cart_user foreign key (user) references users(id)
);

select * from user_cart;

insert into user_cart(boquet, count, user)
values	('4','3','1'),
		('2','1','1'),
        ('6','4','1');

create view getCart
(login, name, price, photo, count)
as
select u.login, b.name, b.price * uc.count, b.photo, uc.count
from user_cart as uc 
	inner join boquets as b on uc.boquet=b.id
    inner join users as u on uc.user=u.id;
    
select count(count) from getCart where login = 'customer';

create table flowers
(
id int primary key auto_increment,
name varchar(255) not null
);

insert into flowers(name)
values	('Голландские роза'), 
		('Хризантема'), 
        ('Роза красная'),
        ('Ромашка'),
        ('Красный мак'),
        ('Орхидея'),
        ('Гвоздика');

create table decor_elements
(
id int primary key auto_increment,
name varchar(255) not null
);

insert into decor_elements(name)
values	('Декоративная зелень'),
		('Лента'),
        ('Вереск'),
        ('Крафт-упаковка');

create table boquet_content
(
id int primary key auto_increment,
boquet int not null,
flower int,
element int,
constraint fk_bq foreign key (boquet) references boquets(id),
constraint fk_fl foreign key (flower) references flowers(id),
constraint fk_el foreign key (element) references decor_elements(id)
);

insert into boquet_content(boquet, flower, element)
values	('1','1','1'),
		('1','2','2'),
        ('1','3','3'),
        ('1',null,'4'),
        ('2','4','2'),
        ('2','3','3'),
        ('2','2','4'),
        ('3','6','2'),
        ('3','2','4'),
        ('3','7','1'),
        ('4','2','3'),
        ('4','5','4'),
        ('4','6','2'),
        ('4',null,'1'),
        ('5','3','2'),
        ('5','2','1'),
        ('5','1',null),
        ('5','5',null),
        ('6','2','3'),
        ('6','3','2'),
        ('6','4','1'),
        ('6','5','4'),
        ('6','1',null);
        
        
drop view getProductContent;
create view getProductContent
(id, flower, decor)
as
select b.id, f.name, de.name
from boquet_content as bc 
	inner join boquets as b on bc.boquet = b.id
    inner join flowers as f on bc.flower = f.id
    inner join decor_elements as de on bc.element = de.id;


create table boquets
(
id int primary key auto_increment,
name varchar(255) not null,
price int not null,
photo varchar(255)
);

insert into boquets(name, price, photo, isNew, isHit, lenght, forWho)
values	('Букет "Нежный"','2000','1.png', 1, 1, '35см', 'Девушке'),
		('Букет "Хороший"','10000','2.png', 0, 1, '30см', null),
        ('Букет "Кайфовый"','100500','3.png', 1, 0, '40см', 'Маме'),
        ('Букет "Праздничный"','4200','4.png', 1, 0,'50см', 'Бабушке'),
        ('Букет "Необычный"','980','5.png', 0, 0, '45см', 'Сестре'),
        ('Букет "Красивый','2190','6.png', 0, 0,'50см', null);

create table newsletter
(
id int primary key auto_increment,
client_name varchar(25) not null,
email varchar(255) not null
);

create table phone_queries
(
id int primary key auto_increment,
clientName varchar(25) not null,
clientPhone varchar(25) not null,
date date not null,
status varchar(25) not null
);

select * from phone_queries;

create table orders
(
id int primary key auto_increment,
name varchar(30) not null,
phone varchar(20) not null,
email varchar(255) not null,
address varchar(255) not null,
flat varchar(10),
date date,
startTime varchar(10),
endTime varchar(10),
isAnonym boolean,
recName varchar(30),
recPhone varchar(20),
payment varchar(30),
amount int not null
);

create view getOrders
(id, name, phone, email, address, flat, date, startTime, endTime, isAnonym, recName, recPhone, payment, amount, userName)
as
	select o.id, o.name, phone, email, address, flat, date, startTime, endTime, isAnonym, recName, recPhone, payment, amount, u.name from orders as o inner join users as u on o.userId=u.id;

select * from getOrders;

create table user_fav
(
id int primary key auto_increment,
user int not null,
boquet int not null,
constraint fk_user_fav foreign key (user) references users(id),
constraint fk_bq_fav foreign key (boquet) references boquets(id)
);

create view getFavProds
(id, userId, name, price, photo)
as
	select b.id, uf.user, b.name, b.price, b.photo
    from user_fav as uf inner join boquets as b on uf.boquet=b.id;
    
select * from getFavProds;
