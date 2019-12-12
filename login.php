<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="theme-color" content="#0c0c0c" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ghoomlo - explore the world</title>
	<link rel="stylesheet" href="css/icomoon.css">
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/style1.css">
	<link rel="stylesheet" href="css/animation.css">
	<link rel="shortcut icon" href="images/favicon.ico">
	<script src="js/jquery.js"></script>
</head>
<body oncontextmenu="return false;">

<?php
require('db.php');
session_start();

if (isset($_POST['username'])){
 
 $username = stripslashes($_REQUEST['username']);

 $username = mysqli_real_escape_string($con,$username);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);

        $query = "SELECT * FROM `users` WHERE username='$username'
and password= '".md5($password)."'";
 $result = mysqli_query($con,$query) or die(mysql_error());
 $rows = mysqli_num_rows($result);
        if($rows==1){
     $_SESSION['username'] = $username;
      
     header("Location: final.php");
         }else{
 header("Location: error.php");
 }
    }else{
?>

	<div id="particles-js">
	
	<div class="main-content">
		<figure>
			<img  class="animated bounceIn" src="img/ghoomlol.png" style="height:250px;width:400px;padding-top:0px;"></figure>
			<center><form class="login"  method="post" action="" name="login">
				<input type="text" name="username" placeholder="username" />
				<input type="password"  name="password" placeholder="password"/>
				<button id="button" name="submit">login</button>
				<p class="message">not regestered! <a href="signup.php">register</a></p>
			</form></center>
			<ul class="social animated bounceInLeft">
				<li><a href="https://github.com/Abhinavgupta371" target="_blank"><i class="icon-youtube"></i></a></li>
				<li><a href="https://twitter.com/agrd1129" target="_blank"><i class="icon-twitter"></i></a></li>
				<li><a href="https://instagram.com/abhinavagrd_1129" target="_blank"><i class="icon-instagram"></i></a></li>
				<li><a href="https://facebook.com/agrd1129" target="_blank"><i class="icon-facebook"></i></a></li>
				
			</ul>
		</div>
		
		
		<footer id="footer" class="animated bounceInUp">
			&copy; 2019 ghoomlo
		</footer>
	</div>
	<script src="js/particles.js"></script>
	<script src="js/security.js"></script>
	<script src="js/app.js"></script>
	<?php } ?>
</body>
</html>
