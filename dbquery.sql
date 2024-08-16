CREATE DATABASE polling_system;

USE polling_system;

CREATE TABLE polls (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question VARCHAR(255) NOT NULL,
    option1 VARCHAR(100) NOT NULL,
    option2 VARCHAR(100) NOT NULL,
    option3 VARCHAR(100) NOT NULL,
    option4 VARCHAR(100) NOT NULL,
    votes1 INT DEFAULT 0,
    votes2 INT DEFAULT 0,
    votes3 INT DEFAULT 0,
    votes4 INT DEFAULT 0
);

