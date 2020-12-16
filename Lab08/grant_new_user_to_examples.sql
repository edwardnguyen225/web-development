CREATE USER 'employee00'@'localhost' IDENTIFIED BY 'lovehandle';

GRANT INSERT, SELECT, DELETE, UPDATE ON examples.* TO 'employee00'@'localhost';
