create table users(
    id int AUTO_INCREMENT PRIMARY KEY,
    Username varchar(256),
    Email varchar(512),
    Password varchar(256),
    UNIQUE (Email)
);