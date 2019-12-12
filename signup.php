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
<style>



</style>
</head>

<body>
<?php
require('db.php');

if (isset($_REQUEST['username'])){
  
 $username = stripslashes($_REQUEST['username']);
  
 $username = mysqli_real_escape_string($con,$username); 
 $email = stripslashes($_REQUEST['email']);
 $email = mysqli_real_escape_string($con,$email);
 $password = stripslashes($_REQUEST['password']);
 $password = mysqli_real_escape_string($con,$password);
 $trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
			echo "<script>
alert('You are registered successfully.Please login..');
window.location.href='index.php';
</script>";
            //echo "<div class='form'>
//<h3>You are registered successfully.</h3>
//<br/>Click here to <a href='login.php'>Login</a></div>";

        }
    }else{
?>
<div id="particles-js">
<div class="main-content">
<figure>
			<img  class="animated bounceIn" src="img/ghoomlol.png" style="height:250px;width:400px;margin=0px;padding:0px;"></figure>
<center>

<form name="registration" action="" method="post">
<input type="text" name="username" placeholder="Username" required />
<input type="email" name="email" placeholder="Email" required />
<input type="password" name="password" placeholder="Password" required />
<input type="submit" name="submit" value="Register" />
<p class="message">Already regestered! <a href="login.php">Login</a></p>
</form>
</center>
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

	<script src="js/app.js"></script>
<?php } ?>
</body>
</html>