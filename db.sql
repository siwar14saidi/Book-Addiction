CREATE TABLE `users` (
  `id` int(11) AUTO_INCREMENT,
  `Firstname` varchar(50),
    `lastname` varchar(50),
  `email` varchar(250)  UNIQUE,
  `password` varchar(50),
  `is_admin` int(1),
    constraint pk_admins PRIMARY KEY(id)
);

ALTER TABLE users
ADD UNIQUE (email);


CREATE TABLE `addbooks` (
  `id` int(11) AUTO_INCREMENT,
  `name` varchar(50) UNIQUE,
  `price` int(50),
    `category` varchar(50),
      image varchar(255),
  
    constraint pk_admins PRIMARY KEY(id),
      constraint fk_addbooks_category FOREIGN KEY (category) REFERENCES category(name)
      
);


CREATE TABLE `category` (
  `id` int(11) AUTO_INCREMENT,
  `name` varchar(50) UNIQUE,
    constraint pk_admins PRIMARY KEY(id)

);