<?php
session_start();

if(!$conn = mysqli_connect("localhost", "root", "PrabhaRavi59", "employee")){
    die("failed to connect");
}
//  else {
//     echo "connected";
//  }
?>

<!DOCTYPE html>
<html>
    <head>

        <title>Login page</title>

        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <link rel="stylesheet" href="css/bootstrap.min.css"/>

        <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="css/login.css"/>

    </head>

    <body>
        <div class="head">
            <b>Welcome to Kriova</b>
        </div>
        <center> <h1> Login Here </h1> </center>   
        <?php
            if(!isset($_SESSION['email']))
            {
        ?>
        <form method="post" action="connection.php">
            <div class="container">   
                <label>Email : </label>   
                <input type="text" placeholder="Enter Email" name="email" required>  
                <label>Password : </label>   
                <input type="password" placeholder="Enter Password" name="password" required>  
                <button type="submit">Login</button>
                <input type="checkbox"> Remember me   
                <a href="home.php">
                <button type="button" class="cancelbtn"> Cancel</button>
                </a>   
                Forgot <a href="forgotPassword.html"> password? </a>   
            </div>   
        </form>     
        <?php
        }
        ?>
        <div class="footer">
            <div class="page-container footer-container">
                <div class="footer-copyright">© 2022 Copyright Kriova </div>
            </div>
        </div>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>

    </body>

</html>