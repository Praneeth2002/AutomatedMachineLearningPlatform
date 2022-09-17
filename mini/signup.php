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
                $name = mysqli_real_escape_string($conn,$_POST['name']);
                $username = mysqli_real_escape_string($conn,$_POST['username']);
                $password = mysqli_real_escape_string($conn,$_POST['password']);
                $phone = mysqli_real_escape_string($conn,$_POST['number']);
                $email = mysqli_real_escape_string($conn,$_POST['email']);
                $query = "insert into login (Id,Name,username,password,phone,email) values ('','$name','$username','$password',$phone,'$email')";
                $res = mysqli_query($conn, $query);
                echo '<script>alert("Account created")</script>';
                header("Location: home2.php");
            }
        ?>
        <?php
            $picture = 'sign-in.jpg';
        ?>
        <style>
            <?php include "signup.css"?>
            .container{
                background-image: url(<?php echo $picture;?>);
            }
        </style>
            <div class="container">
                <div class="main"> </div>
                <div class="welcome">SignUp</div>
                <form method="post" class="form">
                    <input type="text" class="credentials" id="name" placeholder="Name" name="name" required>
                    <input type="text" class="credentials" id="username" placeholder="Username" name="username" required>
                    <input type="password" class="credentials" id="psswrd" placeholder="Password" name="password" required>
                    <input type="number" class="credentials" id="number" placeholder="Phone No" name="number" required>
                    <input type="text" class="credentials" id="email" placeholder="Email" name="email" required>
                    <input type="submit" value="LogIn" class="loginbutton" name="login">
                </form>
            </div>
    </body>
</html>