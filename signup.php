<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    
    <link rel="stylesheet" type="text/css" href="styles.css">


</head>


<body>
    
   
    <form class="" action="signup.php" method="POST">
   <?php include('error.php'); ?>
<div  class="title">
<label  for="" >Sign Up</label>

<input  type="text" name="name" placeholder="Name" value="<?php echo $name; # creating a place for registration form information?>" > 
<input type="text" name="surname" placeholder="Surname" value="<?php echo $surname; ?>">
<input type="text" name="email" placeholder="Email" value="<?php echo $email; ?>">
<input type="password" name="createpassw" placeholder="Enter Your Password" value="">
<input type="password" name="confirmpassw" placeholder="Confirm Your Password" value="">
<button type="submit" class="btn" name="signup">Sign Up</button>


<p >
Do you already have an acoount?
    <a #the link directs to login page href="login.php" >Log in</a>
</p>

</div>
</form>
</body>
</html>