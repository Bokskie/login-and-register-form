<?php
require 'database.php';

// Login Function the register user to login user
if(!empty($_SESSION["id"])){
    header("Location: homePage.php");
  }

if(isset($_POST["submit"])){
    $username = $_POST["username"];
    $number = $_POST["number"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $confirmpassword = $_POST["confirmpassword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM register WHERE username = '$username' OR email = '$email'");
    if(mysqli_num_rows($duplicate)){
        echo 
        "<script> alert('Username and Password Has Already Registered'); </script>";
    }
    else{
        if($password == $confirmpassword){
            $query = "INSERT INTO register VALUES('', '$username', '$number', '$email', '$password', '$confirmpassword')";
            mysqli_query($conn, $query);
            echo
            "<script> alert('Registered Successful'); </script>";
        }
    else 
    {
        echo 
        "<script> alert('Password not match'); </script>";
    }
  }   
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="./register.css">
</head>
<body>

    <div class="form">
            <h1>Registration Form</h1>
        <form class="" action="" method="POST" autocomplete="off">
            <label for="username">Username: </label>
            <input type="text" name="username" id="username">
            <br>
            <br>
            <label for="number">Number: </label>
            <input type="text" name="number" id="number">
            <br>
            <br>
            <label for="email">Email: </label>
            <input type="email" name="email" id="email">
            <br>
            <br>
            <label for="password">Password: </label>
            <input type="password" name="password" id="password">
            <br>
            <br>
            <label for="confirmpassword">Confirm Password: </label>
            <input type="password" name="confirmpassword" id="confirmpassword">
            <br>
            <br>
            <button type="submit" name="submit">Register</button>

        </form>
        <p>You have already account? Click the link to sign in<a href="./login.php">Sign In</a>
    </div>
    <?php
    

    
    
    ?>
</body>
</html>