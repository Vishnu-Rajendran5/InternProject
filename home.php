<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Home Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 

        <link rel="stylesheet" href="css/bootstrap.min.css"/>

        <link href="https://use.fontawesome.com/releases/v5.11.2/css/all.css" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,600;0,700;0,800;1,300;1,400;1,600;1,700;1,800&display=swap" rel="stylesheet" />

        <link rel="stylesheet" href="css/main.css" />

    </head>
    <body>
        <div class="head">
            <b>Welcome to Kriova</b>
        </div>

        <div class="header sticky-top">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand" href="home.html">
                    <div class="logo1">
                        <b>Kriova & Co.</b>
                    </div>
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#my-navbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
    
                <div class="collapse navbar-collapse justify-content-end" id="my-navbar">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="signup.html" data-toggle="modal">
                                <i class="fas fa-user"></i>Signup
                            </a>
                        </li>
                        <div class="nav-vl"></div>
                        <li class="nav-item">
                            <a class="nav-link" href="login.php" data-toggle="modal">
                                <i class="fas fa-sign-in-alt"></i>Login
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="banner-container">
            <h2 class="white pb-3">Kriova</h2>
        </div>

        <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-labelledby="signup-heading" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="signup-heading">Signup with Kriova</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <div class="modal-body">
                        <form id="signup-form" class="form" role="form">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="full_name" placeholder="Full Name" maxlength="30" required>
                            </div>
    
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-phone-alt"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" name="phone" placeholder="Phone Number" maxlength="10" minlength="10" required>
                            </div>
    
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
    
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                            </div>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Confirm Password" minlength="6" required>
                            </div>
    
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Sign Up</button>
                            </div>
                        </form>
                    </div>
    
                    <div class="modal-footer">
                        <span>Already have an account?
                            <a href="login.php" data-dismiss="modal" data-toggle="modal">Login</a>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="login-heading" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="login-heading">Login with Kriova</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
    
                    <div class="modal-body">
                        <form id="login-form" class="form" role="form">
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-user"></i>
                                    </span>
                                </div>
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>
    
                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">
                                        <i class="fas fa-lock"></i>
                                    </span>
                                </div>
                                <input type="password" class="form-control" name="password" placeholder="Password" minlength="6" required>
                            </div>
    
                            <div class="form-group">
                                <button type="submit" class="btn btn-block btn-primary">Login</button>
                            </div>
                        </form>
                    </div>
    
                    <div class="modal-footer">
                        <span>
                            <a href="signup.html" data-dismiss="modal" data-toggle="modal">Click here</a>
                            to register a new account
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer">
            <div class="page-container footer-container">
                <div class="footer-copyright">© 2022 Copyright Kriova </div>
            </div>
        </div>

        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/jquery.js"></script>
    </body>
</html>