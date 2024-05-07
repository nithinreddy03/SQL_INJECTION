# SQL_INJECTION
![sql-injection-attack](https://github.com/nithinreddy03/SQL_INJECTION/assets/122984348/dbd625d6-8a1d-4ca1-8dfe-a33ec24fa817)

## What's SQL Injection
* SQL injection is an attack used to take over database servers by dynamically poisoning SQL queries.
- SQL injection is a cybersecurity vulnerability where attackers input malicious SQL (Structured Query Language) code into a web application's input fields.
- If the application doesn't properly validate or sanitize the input, it can execute unintended database commands.
- This can lead to unauthorized access, data theft, or manipulation of the database.
* To prevent SQL injection, developers should use parameterized queries or prepared statements and validate user inputs.
- Security measures like input validation and output encoding are crucial to mitigate this risk.
* In this attack, a special SQL query is passed as user input to the login page.
- Later, when the backend code compiles the input along with the SQL query.
- The code then gets hijacked because these queries will change the meaning of the backend code.
* The SQL injection queries used for this demonstration project are: ' or 1=1--
- This query will change all the SQL statements to always be true because of the or keyword.
- And the rest of the SQL statement after '--' will be commented. admin' or '1'='1
* This query will change all the SQL statements and will also always be true. Because of the or keyword, the two expressions produce true values.

**SQL injection, also known as SQLI, is a common attack vector that uses malicious SQL code for backend database manipulation to access information that was not intended to be displayed.**

### What's unique in this Project
* Attack Scenario: Exploiting input fields in the admin page, attackers inject malicious SQL commands, potentially accessing sensitive data or compromising the system's integrity.
* Preventive Measures: Implementing parameterized queries, input validation, and proper user input sanitization in XAMPP's LAMP stack setup fortifies the application against SQL injection vulnerabilities.
* Using XAMPP: Leveraging XAMPP, the project integrates robust security practices within the LAMP stack, ensuring resilience against SQL injection attacks in the admin page.

### Installation
## To get the project working, you need to install the following dependencies.
https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.1.33/

**after installing you will see the page.**
![Screenshot 2024-05-08 015242](https://github.com/nithinreddy03/SQL_INJECTION/assets/122984348/cef17cc4-6eb5-4fed-866d-f574a9e601b5)

### Technologies
## Front End
HTML5
CSS3
Bootstrap4
JavaScript

## Back End
XAMPP
Apache HTTP Server
MySQL database
PHP

### DEMO IMAGES
![Screenshot 2024-05-08 011753](https://github.com/nithinreddy03/SQL_INJECTION/assets/122984348/5e0bab39-3096-4d37-a4f7-98bd3748ebf3)
![Screenshot 2024-05-08 012120](https://github.com/nithinreddy03/SQL_INJECTION/assets/122984348/0c602405-571b-4f13-9b42-f2dcc34ae51a)






