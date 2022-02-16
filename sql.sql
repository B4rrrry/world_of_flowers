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

alter table boquets
add isNew bool, add isHit bool, add lenght varchar(10), add forWho varchar(25);

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
clientPhone varchar(25) not null
);

select * from phone_queries;