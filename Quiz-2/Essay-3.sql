
        
CREATE TABLE customers
(
  id       INTEGER      NOT NULL AUTO_INCREMENT,
  name     VARCHAR(255) NULL    ,
  email    VARCHAR(255) NULL    ,
  password VARCHAR(255) NULL    ,
  PRIMARY KEY (id)
);

CREATE TABLE orders
(
  id          INTEGER      NOT NULL AUTO_INCREMENT,
  amount      VARCHAR(255) NULL    ,
  customer_id INTEGER      NULL    ,
  PRIMARY KEY (id)
);

ALTER TABLE orders
  ADD CONSTRAINT FK_customers_TO_orders
    FOREIGN KEY (customer_id)
    REFERENCES customers (id);

      