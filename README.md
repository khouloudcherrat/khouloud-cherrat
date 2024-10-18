# Student Management System
<p align="center">
  <a href="https://www.php.net/"><img src="https://www.vectorlogo.zone/logos/php/php-icon.svg" alt="PHP" height="70"></a>
  <a href="https://www.mysql.com/"><img src="https://www.vectorlogo.zone/logos/mysql/mysql-icon.svg" alt="MySQL" height="70"></a>
</p>
This project is a simple Student Management System implemented in PHP. It provides functionalities for user authentication, student addition, and a homepage for navigating the system.

## File Structure

The project consists of the following files:

- **ajoutEleve.php**: A PHP script for adding a new student to the database. It handles the form submission for student information and updates the database accordingly.

- **conexionPD.php**: This file contains the database connection details. It establishes a connection to the database using PDO (PHP Data Objects) to ensure secure and efficient database operations.

- **home.html**: The homepage of the Student Management System. It serves as the main interface for users to navigate to various functionalities of the system.

- **liste.php**: A PHP script that retrieves and displays the list of students from the database. It provides a view for users to see all the registered students.

- **loginForm.html**: An HTML file that presents the login form for users to enter their credentials. It is designed for user authentication.

- **signupForm.html**: This file contains the sign-up form for new users to register in the system. It collects necessary user information for account creation.

- **verification_login.php**: A PHP script that verifies user credentials during the login process. It checks the provided information against the database to authenticate users.

- **verification_signup.php**: This script handles the verification process during user registration. It checks the submitted information and creates a new user account in the database if the validation passes.

## Getting Started

### Prerequisites

- PHP (version 7.0 or higher)
- A web server (e.g., Apache, Nginx)
- A MySQL database

### Installation

1. Clone this repository to your local machine.
   ```bash
   git clone https://github.com/khouloudcherrat/students-management-website.git
