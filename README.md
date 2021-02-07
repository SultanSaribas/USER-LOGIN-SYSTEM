# USER REGISTER/LOGIN SYSTEM
*You can see the website in the 'Registration_System.webm' video above.*
<br>
**It is a User Login System Web Application. It is developed by using phpMyAdmin for MySQL database. It includes the classes as follows;**
<br>
•	error.php
<br>
•	login.php
<br>
•	server.php
<br>
•	signup.php
<br>
•	welcome.php
<br>
•	style.css
<br>
•	styles.css
<br>

  A local server needed to install to run this application. I installed xampp local server and I took advantage of Visual Studio Code IDE to code in PHP. 
This application consists of 3 web pages which are Log in Page, Sign up Page, Welcome Page. If a user did not enter both email and password information it gives an error and says “Please enter your email/password”. If the user does not have an account it gives an error and says “The user could not be found.”. In this case, the user should click the sign up link below to register the system. In the registration page, user should enter all information not to get errors and should confirm the password. If the confirmation password does not match the password, it gives error as well. When all information the user enter is properly full and passwords match, then it direct to Login page. Finally, the user can log in the system with the information he/she used for signing up the system. After all, the user can access the Welcome Page. In addition, if the user wants, he/she can log out using the link(directs to Login page) in the Welcome page.
<br><br>
The local links for this web application as follows;
<br>
http://localhost/LoginSystem/login.php   //Log in Page
<br>
http://localhost/LoginSystem/signup.php  //Registration Page
<br>
http://localhost/LoginSystem/welcome.php  //Welcome Page
<br>

**SQL Queries;**
```
•INSERT INTO users (name, surname, email, password)
VALUES ('$name', '$surname', '$email', '$createpassw')
•SELECT * 
FROM users
WHERE email = '$email' AND password='$createpassw'
```
