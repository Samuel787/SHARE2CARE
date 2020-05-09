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
    item_desc varchar(256),
    price varchar(256),
    mkt_price varchar(256),
    location varchar(1024),
    category varchar(512),
    quantity varchar(512)
);

insert into `users`(id, Username, Email, Password) values (1, "test", "test@test.com", "test");
insert into `users`(id, Username, Email, Password) values (2, "John", "john@gmail.com", "john");
insert into `users`(id, Username, Email, Password) values (3, "Andrea", "andrea@gmail.com", "andrea");
insert into `users`(id, Username, Email, Password) values (4, "Kelvin", "kelvin@gmail.com", "kelvin");
insert into `users`(id, Username, Email, Password) values (5, "Bob", "bob@gmail.com", "Bob");

insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (1, "John", "john@gmail.com","shampoo", '7.50', '10.90', "Jurong", "Toiletries", "3");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (2, "John", "john@gmail.com","chocolates", '4.50', '6.20', "Jurong", "Snacks", "20");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (3, "John", "john@gmail.com","noodles", '0.60', '1.20', "Jurong", "Food", "10");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (4, "John", "john@gmail.com","biscuits", '1.50', '$1.95', "Jurong", "Snacks", "15");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (5, "John", "john@gmail.com","Sprite", '5.00', '$8.90', "Jurong", "Beverages", "8");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (6, "Andrea", "andrea@gmail.com","soap", '2.00', '$2.45', "Woodlands", "Toiletries", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (7, "Andrea", "andrea@gmail.com","detergent", '4.00', '4.35', "Woodlands", "Toiletries", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (8, "Andrea", "andrea@gmail.com","sanitizer", '2.00', '2.50', "Woodlands", "Toiletries", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (9, "Andrea", "andrea@gmail.com","chips", '3.50', '3.95', "Woodlands", "Snacks", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (10, "Andrea", "andrea@gmail.com","cookies", '5.00', '5.50', "Woodlands", "Snacks", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (11, "Kelvin", "kelvin@gmail.com","Ice-cream", '10.00', '10.90', "Punggol", "Snacks", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (12, "Kelvin", "kelvin@gmail.com","bandage", '4.50', '7.00', "Punggol", "Medical Supplies", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (13, "Kelvin", "kelvin@gmail.com","tape", '3.00', '5.00', "Punggol", "Others", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (14, "Kelvin", "kelvin@gmail.com","toilet roll", '4.50', '4.75', "Punggol", "Toiletries", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (15, "Kelvin", "kelvin@gmail.com","tissue paper (box)", '3.50', '3.70', "Punggol", "Toiletries", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (16, "Bob", "bob@gmail.com","nuggets", '3.00', '3.45', "Jurong", "Toiletries", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (17, "Bob", "bob@gmail.com","sausage", '1.50', '1.95', "Jurong", "Toiletries", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (18, "Bob", "bob@gmail.com","coke", '8.00', '9.05', "Jurong", "Toiletries", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (19, "Bob", "bob@gmail.com","chocolates", '6.00', '6.20', "Jurong", "Toiletries", "1");
insert into `sells`(id, Username, Email, item_desc, price, mkt_price, location, category, quantity) values (20, "Bob", "bob@gmail.com","instant noodles", '1.00', '1.20', "Jurong", "Toiletries", "1");
