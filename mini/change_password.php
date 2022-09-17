<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Change Password</title>
</head>
<body>
	<style>
		<?php include "change_password.css";?>
	</style>
	<?php
		include("connection.php");
		if(!empty($_POST['username'])){
			$username = $_POST['username'];
			$query = "select * from login where username='$username'";
			$res = mysqli_query($conn,$query);
			$count = mysqli_num_rows($res);
			if($count==1){
				$details=mysqli_query($conn,"select email,password from login where username='$username' ");
				while($row=mysqli_fetch_array($details)){
					$sendto=$row['email'];
					$pas=$row['password'];
				}
				$subject= "password details of mata data extractor";
				$message="Your password is: ".$pas;
				$message .="Dont forget to delete your mail after loging in";
				$header="From:praneeth.sunkavalli2002@gmail.com";
				$retval = mail ($sendto,$subject,$message,$header);
				if($retval==true){
					header("Location: sign-in.php");
				}

			}
			else{
                    echo '<script>alert("Email is not registered")</script>';
           	}
		}
	?>
	<form method="post">
		<h2>Enter the detail</h2>
		<div class="input"></div>
		<input type="text" class="credentials" id="username" placeholder="Enter Username" name="username">
		<input type="submit" id="button" name="submit" value="Send">
		<p>Password will be sent to your<br> &nbsp&nbsp&nbsp registered email address</p>
	</form>
</body>
</html>