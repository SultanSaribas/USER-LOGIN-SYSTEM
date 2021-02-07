<?php 
session_start();
$name='';
$surname='';
$email='';
$error = array();
#connects the system to database
$mydatabase=mysqli_connect('localhost','root', '', 'registration');
#if the sign up button is clicked
if (isset($_POST['signup'])) {
    #matches the attributes
    $name = mysqli_real_escape_string($mydatabase,$_POST['name']);
    $surname = mysqli_real_escape_string($mydatabase,$_POST['surname']);
    $email = mysqli_real_escape_string($mydatabase,$_POST['email']);
    $createpassw = mysqli_real_escape_string($mydatabase,$_POST['createpassw']);
    $confirmpassw = mysqli_real_escape_string($mydatabase,$_POST['confirmpassw']);

    #checking if all requirements have done and shows the errors
    if (empty($name)) {
        array_push($error, "Name is required!");
        # code...
    }
    if (empty($surname)) {
        array_push($error, "Surname is required!");
        # code...
    }
    if (empty($email)) {
        array_push($error, "Email is required!");
        # code...
    }
    if (empty($createpassw)) {
        array_push($error, "You need to create a password!");
        # code...
    }
    #checking if both passwords are matched
    if ($createpassw != $confirmpassw) {
        array_push($error, "The passwords don't match, Please try again!");
        # code...
    }
    #adds the information to database
    if (count($error)==0) {
        $db="INSERT INTO users (name, surname, email, password) VALUES ('$name', '$surname', '$email', '$createpassw')";
        mysqli_query($mydatabase,$db);
        # code...
       #directs to log in page
        header('location: login.php');
        
    }  
    }

    #if log in button is clicked
    if (isset($_POST['log'])) {
    ##matches the necessary attributes
    $email = mysqli_real_escape_string($mydatabase,$_POST['email']);
    $createpassw = mysqli_real_escape_string($mydatabase,$_POST['password']);
        # code...
    #checking if all requirements have done and shows the errors
    if (empty($email)) {
        array_push($error, "Please enter your email address!");
        # code...
    }
    if (empty($createpassw)) {
        array_push($error, "Please enter your password!");
        # code...
    }
    #if there is no error
    if (count($error)==0) {

       $dbq = "SELECT * FROM users WHERE email = '$email' AND password='$createpassw'";
       $con= mysqli_query($mydatabase,$dbq);
        # code...
        #if an existing user logged in with correct information, directs to welcome page
        if(mysqli_num_rows($con)==1){
            $_SESSION['email'] = $email;
            header('location: welcome.php');
        }
        else{
            array_push($error, "The user could not be found.");
        
        }
        
        
    }

} 
#if logout is clicked, redirects to login page
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['name']);
    unset($_SESSION['surname']);
    header('location: login.php');
}

?>