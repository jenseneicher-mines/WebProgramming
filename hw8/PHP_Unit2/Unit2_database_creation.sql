DROP TABLE IF EXISTS CUSTOMERS;
DROP TABLE IF EXISTS PRODUCTS;
DROP TABLE IF EXISTS ORDERS;

CREATE TABLE CUSTOMERS(
    firstname TEXT NOT NULL,
    lastname TEXT NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL PRIMARY KEY
);

CREATE TABLE PRODUCTS(
    name VARCHAR(50) NOT NULL PRIMARY KEY,
    price FLOAT NOT NULL,
    quantity INT,
    image VARCHAR(255) UNIQUE NOT NULL
);

CREATE TABLE ORDERS(
    time VARCHAR(255) NOT NULL,
    product TEXT NOT NULL REFERENCES PRODUCTS(name),
    customer VARCHAR(255) NOT NULL REFERENCES CUSTOMERS(email),
    image VARCHAR(255) NOT NULL REFERENCES PRODUCTS(image),
    quantity INT NOT NULL,
    tax FLOAT NOT NULL,
    donation FLOAT NOT NULL,
    total FLOAT NOT NULL,
    PRIMARY KEY (customer, time)
);

INSERT INTO PRODUCTS VALUES ('steerman', 75999.0, 10, '/fall_2020/jeicher/php/PHP_Unit2/images/steerman.jpg');
INSERT INTO PRODUCTS VALUES ('eagle', 67070.0, 3, '/fall_2020/jeicher/php/PHP_Unit2/images/eagle.jpg');
INSERT INTO PRODUCTS VALUES ('pits', 345999.0, 5, '/fall_2020/jeicher/php/PHP_Unit2/images/pits.jpg');
INSERT INTO PRODUCTS VALUES ('hatz', 70999.0, 7, '/fall_2020/jeicher/php/PHP_Unit2/images/hatz.jpg');

INSERT INTO CUSTOMERS VALUES ('Jensen', 'Eicher', 'jeicher@mymail.mines.edu');
INSERT INTO CUSTOMERS VALUES ('Bob', 'Eicher', 'bob@aol.com');
INSERT INTO CUSTOMERS VALUES ('Craig', 'Eicher', 'craig@aol.com');

