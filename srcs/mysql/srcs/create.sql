CREATE DATABASE mhufflep_db;
CREATE USER 'mhufflep'@'localhost' IDENTIFIED BY 'mhufflep';
GRANT ALL PRIVILEGES ON mhufflep_db.* TO 'mhufflep'@'localhost';
FLUSH PRIVILEGES;