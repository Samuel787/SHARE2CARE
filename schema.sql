drop table if exists users;
drop table if exists sells;

create table users(
    id int AUTO_INCREMENT PRIMARY KEY,
    Username varchar(256),
    Email varchar(512),
    Password varchar(256),
    UNIQUE (Email)
);

create table sells(
    id int AUTO_INCREMENT primary key,
    Username varchar(256),
    Email varchar(512),
    item_desc text,
    price double(10, 2),
    mkt_price double(10, 2),
    location text
);

insert into `users`(id, Username, Email, Password) values (1, "test", "test@test.com", "test");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location) values (1, "test", "test@test.com","shampoo", 4.5, 5, "Jurong");
