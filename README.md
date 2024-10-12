# user_management_application


This project is a simple User Management System built using HTML, CSS, JavaScript, PHP, and MySQL. It allows users to perform CRUD operations (Create, Read, Update, Delete) on user data.

## Features
- Add new user details
- View all user details
- Delete user details
- Input validation for phone number and email format

## Technology Stack
- Front-end: HTML, CSS, JavaScript
- Back-end: PHP
- Database: MySQL
- Local Server: XAMPP

## Installation Instructions

1. Install XAMPP from [https://www.apachefriends.org/](https://www.apachefriends.org/).
2. Open phpMyAdmin and create a database called `user_management`.
3. Run the following SQL command to create the `users` table:

   ```sql
   CREATE TABLE users (
       id INT AUTO_INCREMENT PRIMARY KEY,
       first_name VARCHAR(50),
       last_name VARCHAR(50),
       phone_number VARCHAR(15),
       email VARCHAR(100),
       address TEXT
   );
