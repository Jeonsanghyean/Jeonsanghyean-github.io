CREATE DATABASE IF NOT EXISTS ticket_system;
USE ticket_system;
CREATE TABLE IF NOT EXISTS ticket_orders (
    id INT AUTO_INCREMENT PRIMARY KEY,
    customer_name CHAR(32) CHARACTER SET utf8,
    admission_child INT(3),
    admission_adult INT(3),
    big3_child INT(3),
    big3_adult INT(3),
    free_pass_child INT(3),
    free_pass_adult INT(3),
    annual_pass_child INT(3),
    annual_pass_adult INT(3),
    sum INT(3),
    order_date DATETIME
);
DESCRIBE ticket_orders;