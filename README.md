This project is hosted under the master branch. It contains the following:

A folder named tailwebs, which holds all the project files.
A database folder that contains the MySQL database for the project.
Prerequisites
To run this project, ensure you have the following software installed:

XAMPP (Apache, MySQL, PHP)
Git (to clone the repository)

Setup Instructions
1. Clone the Repository    git clone  https://github.com/muttagitabassum/tailwebs.git
2. Switch to the master Branch
3. Setup XAMPP
1.	Open XAMPP Control Panel.
2.	Start Apache and MySQL.
3.	Copy the cloned folder tailwebs to your XAMPP htdocs directory:
o	C:/xampp/htdocs/tailwebs (or the corresponding path on your machine).
4. Import the Database
1.	Open phpMyAdmin in your browser (http://localhost/phpmyadmin).
2.	Create a new database, named tailwebs.
3.	Import the .sql file from the database folder:
o	Go to Import in phpMyAdmin.
o	Choose the .sql file from the database folder.
o	Click Go to complete the import.
4.	Update the database credentials:

5.	Run the project http://localhost/tailwebs
