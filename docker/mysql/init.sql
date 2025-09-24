CREATE DATABASE IF NOT EXISTS securevault CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER IF NOT EXISTS 'securevault_user'@'%' IDENTIFIED BY 'secure_password_123';
GRANT ALL PRIVILEGES ON securevault.* TO 'securevault_user'@'%';
FLUSH PRIVILEGES;
