# SQL Project — Tourism Management System (TMS)

## 1. Introduction

Structured Query Language (SQL) is used to store, manage, and retrieve data from relational databases. The SQL project helps students understand database design, data manipulation, and query execution as per the academic syllabus. This repository contains a PHP-based Tourism Management System (TMS) with sample pages and SQL files to demonstrate database-driven web application concepts.

## 2. Objectives of the SQL Project

- To understand the basic concepts of Database Management Systems (DBMS).
- To design a relational database using tables, keys, and constraints.
- To apply SQL commands for data definition (DDL), data manipulation (DML), data control (DCL), and transaction control (TCL).
- To develop skills in writing efficient SQL queries, including joins, subqueries, and functions.
- To analyze and retrieve meaningful information from large datasets.

## 3. Project Requirements (As per Syllabus)

### Database Creation
Create a database relevant to a real-world scenario (the provided project uses a tourism/bookings scenario). See the `SQl FIle/tms.sql` file for the schema and sample data.

### Table Design
- Use appropriate fields, data types, primary keys, foreign keys, and constraints.

### DDL Commands
- CREATE
- ALTER
- DROP
- TRUNCATE

### DML Commands
- INSERT
- UPDATE
- DELETE
- SELECT

### Advanced SQL Queries
- JOINS (INNER, LEFT, RIGHT, FULL)
- SUBQUERIES
- AGGREGATE FUNCTIONS (SUM, AVG, COUNT, MAX, MIN)
- GROUP BY, HAVING

### DCL & TCL Commands
- GRANT, REVOKE
- COMMIT, ROLLBACK, SAVEPOINT

### Reports/Output
Display final results using clear SELECT queries.

## 4. Expected Deliverables

- Problem statement
- ER diagram / schema (see `SQl FIle/tms.sql` for the schema; draw ER diagram based on it)
- Table structure and SQL code
- Input data (sample records present in the SQL file)
- Output of queries (example SELECT queries in this README and/or SQL file)
- Final conclusion or application use-case

## 5. Learning Outcomes

After completing this project, students will be able to:

- Design structured relational databases.
- Write optimized SQL queries.
- Implement database operations securely.
- Understand real-time applications of SQL in software development.

## Local Setup and Login Instructions

1. Place the project in your web server document root.
   - For XAMPP on Windows: `C:\xampp\htdocs\Tourism.trip` (this repository path).
2. Import the database schema and sample data:
   - Use phpMyAdmin or MySQL CLI to import the SQL file located at `SQl FIle/tms.sql`.
3. Start your local server (Apache + MySQL via XAMPP control panel).
4. Admin login (for admin dashboard):
   - Open your browser and go to: `http://localhost/tms/admin`
   - Username: `admin`
   - Password: `Test@123`

5. User login (front-end test user):
   - Open your browser and go to: `http://localhost/tms/`
   - Username: `test@gmail.com` (use the registration or check imported sample users)

> Note: If you imported `tms.sql`, confirm that the sample user with email `test@gmail.com` exists; if not, register or insert a test user into the `tblusers` table.

## Example SQL snippets

-- Example: Select total bookings per package
SELECT tp.PackageName, COUNT(b.BookingId) AS TotalBookings
FROM tbltourpackages tp
LEFT JOIN tblbooking b ON tp.PackageId = b.PackageId
GROUP BY tp.PackageName;

-- Example: Show recent enquiries
SELECT FullName, EmailId, MobileNumber, Subject, Description
FROM tblenquiry
ORDER BY id DESC
LIMIT 10;

## Notes
- This README is intended as a teaching scaffold; instructors and students should expand diagrams, queries, and reports to match their course requirements.

---
If you want, I can: permanently remove neutralized animation files, add ER diagrams, or generate sample query outputs and examples to include in this README.
