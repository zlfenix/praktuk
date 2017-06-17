-- Створення таблиць
CREATE TABLE Products (p_id int, p_name varchar(255))
CREATE TABLE Categories (c_id int, c_name varchar(255))
CREATE TABLE Associations (p_id int, c_id int)

-- Заповнення таблиць
INSERT INTO Products (p_id, p_name)
VALUES
    (1, 'prod1'),
    (2, 'prod2'),
    (3, 'prod3');

INSERT INTO Categories (c_id, c_name)
VALUES
    (1, 'cat1'),
    (2, 'cat2'),
    (3, 'cat3');

INSERT INTO Associations (p_id, c_id)
VALUES
    (1, 1),
    (1, 2),
    (2, 1),
    (3, 2),
    (3, 3);

-- Запит для виведення результуючої таблиці
SELECT Products.p_name as p_name, Cetegories.c_name as c_name
FROM Associations
    INNER JOIN Products
        ON Associations.p_id = Products.p_id
    INNER JOIN Categories
        ON Associations.c_id = Categories.c_id
