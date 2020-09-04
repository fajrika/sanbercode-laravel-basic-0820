-- Soal 1
CREATE DATABASE myshop;
-- Soal 2
CREATE TABLE myshop.categories (
  id INT NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NULL,
  PRIMARY KEY (id)
);
CREATE TABLE myshop.items (
  id INTEGER NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NULL,
  description VARCHAR(255) NULL,
  price INTEGER NULL,
  stock INTEGER NULL,
  category_id INT NULL,
  PRIMARY KEY (id)
);
CREATE TABLE myshop.users (
  id INTEGER NOT NULL AUTO_INCREMENT,
  name VARCHAR(255) NULL,
  email VARCHAR(255) NULL,
  password VARCHAR(255) NULL,
  PRIMARY KEY (id)
);
ALTER TABLE
  myshop.items
ADD
  CONSTRAINT FK_categories_TO_items FOREIGN KEY (category_id) REFERENCES myshop.categories (id);
-- Soal 3
INSERT INTO
  myshop.users (name, email, password)
VALUES
  ('John Doe', 'john@doe.com', 'john123'),
  ('Jane Doe', 'jane@doe.com', 'jenita123');
INSERT INTO
  myshop.categories (name)
VALUES
  ('gadget'),
  ('cloth'),
  ('men'),
  ('women'),
  ('branded');
INSERT INTO
  myshop.items (name, description, price, stock, category_id)
VALUES
  ( 'Sumsang b50', 'hape keren dari merek sumsang', '4000000', '100', '1'),
  ( 'Uniklooh', 'baju keren dari brand ternama', '500000', '50', '2'),
  ( 'IMHO Watch', 'jam tangan anak yang jujur banget', '2000000', '10', '1');
-- Soal 4.a
SELECT
  id,
  name,
  email
FROM myshop.users;
-- Soal 4.b
SELECT
  *
FROM myshop.items
WHERE items.price > 1000000;
SELECT
  *
FROM myshop.items
WHERE items.name like '%uniklo%';
-- Soal 4.c
SELECT
  items.name,
  items.description,
  items.price,
  items.stock,
  items.category_id,
  categories.name as kategori
FROM myshop.items
JOIN myshop.categories 
    ON categories.id = items.category_id;
-- Soal 5
UPDATE myshop.items
SET price = 2500000
WHERE name like '%Sumsang%'