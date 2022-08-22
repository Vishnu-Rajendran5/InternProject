<?php

session_start();


if(!$conn = mysqli_connect("localhost", "root", "PrabhaRavi59", "employee")){
    die("failed to connect");
}
//  else {
//     echo "connected";
// }


//create variable to get the information from the login page

$email = $_POST['email'];
$password = $_POST['password'];

// echo $employee_name;
// echo $password;

$sql = "SELECT * FROM employee_details WHERE email = '$email' AND password ='$password'";
$r = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($r);

if ($email == "" && $password == ""){
    header('location: profile.php');
 }


if($row['email'] == $email && $row['password'] == $password) {
    
    //echo "Hi you have successfully logged in";
    
 } ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Profile</title>

        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <link rel="stylesheet" href="css/bootstrap.min.css"/>

        <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="css/main.css" />
        <link href="css/dashboard.css" rel="stylesheet" />
</head>

<body>
        <div class="head">
            <b>Welcome to Kriova</b>
        </div>

        <div class="header sticky-top">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="home.php">
                    <div class="logo1">
                        <b>Kriova & Co.</b>
                    </div>
                </a>
        </div>
        <div class="my-profile page-container">
        <h1>My Profile</h1>
        <div class="row">
            <div class="col-md-3 profile-img-container">
                <i class="fas fa-user profile-img"></i>
            </div>
            <div class="col-md-9">
                <div class="row no-gutters justify-content-between align-items-end">
                    <div class="profile">
                    <table style="width:100%">
                    <tr>
                        <td>Name</td>
                        <td>Vishnu</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>rajendran.vishnu.p@gmail.com</td>
                    </tr>
                    <tr>
                        <td>Phone Number</td>
                        <td>9576192615</td>
                    </tr>
                    <tr>
                        <td>City</td>
                        <td>Bengaluru</td>
                    </tr>
                    <tr>
                    <td>State</td>
                    <td>Karnataka</td>
                    </tr>
                    <tr>
                        <td>Country</td>
                        <td>India</td>
                    </tr>
                    <tr>
                        <td>Pincode</td>
                        <td>5679000</td>
                    </tr>
                    </table>
                </div>
            </div>
        </div>
        </div>



 <div id="menu">
    <a href = "logout.php">Logout</a>
 </div>
 <br>

         <div class="footer">
            <div class="page-container footer-container">
                <div class="footer-copyright">© 2022 Copyright Kriova </div>
            </div>
        </div>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>


</body>
</html>
