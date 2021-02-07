<?php include ('server.php'); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <?php include('error.php'); ?>
    <form class="" action="login.php" method="post">
    <div class="container">
    <label  for="">Log in</label # creating a place for user email and user password> 
     
    <input type="text" name="email" placeholder="Email" value="">
    <input type="password" name="password" placeholder="Password" value="">
   
    <a href="signup.php"  #to direct to sign up page>
        Sign Up?
    </a>
   
    <button type="submit" class="btn" name="log">Login</button  #creating a button to be able to log in, if everyting is okey>
    </div>

</form>
</body>
</html>