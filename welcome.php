
<?php include ('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
   
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome Page</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>

<body>
    <form class="" action="login.php" method="post">
    <div class="home">
        <?php if (isset($_SESSION['welcome'])):  ?>
        <div class="welcome">
            <h2>
                <?php echo $_SESSION['welcome'];
                unset($_SESSION['welcome']); ?>
            </h2>


        </div>
            <?php endif ?>
             
            <?php if (isset($_SESSION["email"])): ?>
                <p>WELCOME!!!
                <p><a href="welcome.php?logout='1'" class="logout" >Logout</a></p>
            </p>
                <?php endif ?>
    
    </div>

</form>
</body>
</html>