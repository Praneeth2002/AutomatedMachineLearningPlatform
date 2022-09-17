<!DOCTYPE html>
<html>
    <head>
        <title>Welcome to the Login page</title>
        <link rel="stylesheet" type="text/css" href="login.css">
        <script src="login.js"></script>
    </head>
    <body>
        <?php
            include("connection.php");
            if(!empty($_POST['login'])){
                $username = $_POST['username'];
                $password = $_POST['password'];
                $query = "select * from login where username='$username' and password='$password'";
                $res = mysqli_query($conn, $query);
                $count = mysqli_num_rows($res);
                if($count==1){
                    header("Location: home2.php");
                    exit;
                }
                else{
                    echo '<script>alert("Wrong Credentials")</script>';
                }
            }
        ?>
        <?php
            $picture = 'sign-in.jpg';
        ?>
        <style>
            <?php include "sign-in.css"?>
            .container{
                background-image: url(<?php echo $picture;?>);
            }
        </style>
            <div class="container">
                <div class="main"> </div>
                <div class="welcome">Sign-In</div>
                <form method="post" class="form">
                    <input type="text" class="credentials" id="username" placeholder="Username" name="username" required>
                    <input type="password" class="credentials" id="psswrd" placeholder="Password" name="password" required>
                    <input type="submit" value="LogIn" class="loginbutton" name="login">
                    <div style="position:absolute; left:41.6%; top:72%;">
                        <a style="color:white; display:inline-block;">Forgot password?</a>
                        <a class='link' href='change_password.php'><b>Change your password</b></a></br>
                    </div>
                    <div style="position:absolute; left:41.6%; top:74.6%;">
                        <a style="color:white; display:inline-block;">Don't have an account?</a>
                        <a class='link' href='signup.php'><b>Create an account</b></a>
                    </div>
                </form>
            </div>
    </body>
</html>