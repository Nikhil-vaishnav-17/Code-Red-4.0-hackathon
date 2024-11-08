# Code Red 4.0 hackathon
 Prototype of VGU hackathon Oct. 2024. Problem statement:- Community driven Sustainability Projects

To run the program:-
1. Open the XAMPP and make the server running.
2. Go to 'localhost/phpmyadmin' in your browser.
3. Chick on New then select the SQL.
4. Paste the SQL code:-

'''
CREATE DATABASE community_sustainability;
CREATE DATABASE feedback_db;
CREATE DATABASE user_database;

USE community_sustainability;

CREATE TABLE discussions (
    id INT AUTO_INCREMENT PRIMARY KEY,
    project_id INT NOT NULL,
    user VARCHAR(255) NOT NULL,
    comment TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE TABLE projects (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    creator VARCHAR(255) NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    upvotes INT DEFAULT 0,
    downvotes INT DEFAULT 0,
    image VARCHAR(255)
);

USE feedback_db;
CREATE TABLE feedbacks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    feedback TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

USE user_database;
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    community_code VARCHAR(50)
);
'''

This will create the databases and the tables.

5. Now to run the program save all the files in a folder and run
   'localhost/Folder_name'
