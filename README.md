# Insecure PHP MySQL Connection

This repository demonstrates a common, yet easily avoidable, security vulnerability in PHP code interacting with MySQL databases.  The original `bug.php` file uses the deprecated `mysql_*` functions, making it susceptible to SQL injection and lacking robust error handling. The solution (`bugSolution.php`) provides a safer and more modern approach using the MySQLi extension or PDO.

**Vulnerabilities in `bug.php`:**

* **SQL Injection:** The code directly incorporates user input (`$_GET['username']`) into the SQL query without proper sanitization. This makes it vulnerable to SQL injection attacks, allowing malicious users to manipulate the query and potentially access sensitive data.
* **Deprecated Functions:** The `mysql_*` functions are deprecated and have been removed from recent PHP versions. Using them is considered bad practice due to security concerns and lack of support.
* **Insufficient Error Handling:** The error handling is minimal and does not provide detailed information about what went wrong. This makes debugging and identifying issues difficult.

**Solution in `bugSolution.php`:**

The `bugSolution.php` file demonstrates how to rewrite the code using the `mysqli_*` functions, addressing the vulnerabilities present in the original code.  This involves using parameterized queries to prevent SQL injection and improved error handling to provide more context if errors occur.  Consider also using PDO for database interaction, which offers even more advantages.