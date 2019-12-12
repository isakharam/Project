<!DOCTYPE HTML>
	<html>
		<head>
			<title>ghoomlo</title>
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<meta charset="UTF-8" name="viewport" content="width=device-width, inital-scale=1">
			<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
			rel="stylesheet">
			 <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
			<link href="css/mdb.min.css" rel="stylesheet">
			<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
			  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
			<style>
			.mid{
			height:500px;
			width:95%;
			background:grey;		
			
			}
			.mid img{
			margin-top:-145px;
			height:100%;
			width:100%;
			
			}
			.text{
			position:absolute;
			width:1260px;
			height:450px;
			
			background:white;
			opacity:0.5;
			margin-top:-450px;
			
							
			
			
			}
			
			
			
			
			</style>  
			  
			  
			  
			  
			  
			  
			  
			  
		</head>
		<body>
		   <div class="head">
				<div class="logo">
					<a href="index.php"><img src="img/logo3.png" alt="logo"></a>
				</div>
				
			
				<div class="con">
					<div class="box">
						<div class="front"><a href="index.php">
							<i class="fas fa-home"></i>
						</div>
						<div class="back">
							<p>HOME</p>
							<div class="headic"></div>
						</div>
						</a>
					</div>

					<div class="box">
						<div class="front"><a href="about.php"><i class="fas fa-users"></i></div>
						<div class="back"><p>INFO</p>
						<div class="headic"></div>
						</div></a>
					</div>

					<div class="box">
						<div class="front"><a href="#"><i class="fas fa-map-marked-alt"></i></div>
						<div class="back"><p>PLANS</p><div class="headic"></div></div></a>
					</div>

					<div class="box">
						<div class="front"><a href="contact.php"><i class="fas fa-phone"></i></div>
						<div class="back"><p style="margin-top:20px">CONTACT</p><div class="headic" style="margin-top:-25px"></div></div></a>
					</div>

				</div>
				<div class="register">
				<?php 
				session_start();
				if(!isset($_SESSION["username"])){
				echo"<a href='login.php'><button type='button' id='reg'>LOGIN</button></a>
					
					<a  href='signup.php'><button type='button' id='reg'>SIGNUP</button></a>";
				}
				else {
					$a=$_SESSION["username"];
					$b='Welcome  ';
					$e=' !';
					$c = $b.$a.$e;
					echo"<a  href='logout.php'><button type='button' id='reg'>Log out</button></a>";
					echo $c;
				}
				?>
				
					
				</div>
			</div>
			<div class="ll">
			
			</div>
			<center>
			<div class="mid" >
			
			<img src="img/pvtp.jpg">
			
			
			<div class="text">
			<h1>PRIVATE POLICY</h1>
			<p>Privacy Notice
This privacy notice discloses the privacy practices for (website address). </br>
This privacy notice applies solely to information collected by this website.</br>
 It will notify you of the following:</br>
1.	What personally identifiable information is collected from you through the website, how it is used and with whom it may be shared.</br>
2.	What choices are available to you regarding the use of your data.</br>
3.	The security procedures in place to protect the misuse of your information.</br>
4.	How you can correct any inaccuracies in the information.</br>
Information Collection, Use, and Sharing</br>
We are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give</br>
 us via email or other direct contact from you. We will not sell or rent this information to anyone.</br>
We will use your information to respond to you, regarding the reason you contacted us. We will not share your information</br>
 with any third party outside of our organization, other than as necessary to fulfill your request, e.g. to ship an order.</br>
You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address or</br>
 phone number given on our website:
•	See what data we have about you, if any.</br>
•	Change/correct any data we have about you.</br>
•	Have us delete any data we have about you.</br>
•	Express any concern you have about our use of your data.


</p>
			
			
			</div>
			
			
			
			
			</div>
			</center>
			
			

		
		
			
			<div class="container11">
				<div class="footer">
					<div class="fot">
						<div class="a1" id="aa1">
						<a href="about.php"><p>ABOUT US</p></a>
						<a href="company.php"><p>COMPANY</p></a>
						<a href="team.php"><p>THE TEAM</p></a>
							
						
						</div>
					</div>
					<div class="fot">
						<div class="a2" id="aa1">
						<a href="tc.php"><p>TEARMS & CONDITION</p></a>
						<a href="pvtpolicy.php"><p>PRIVATE POLICY</p></a>
						<a href="signup.php"><p>REGISTRATION</p></a>
						
							
						
						</div>
					</div>
					<div class="fot">
					<div class="a3" id="aa1">
						<p>Visit Us At:</p>
						<div class="social">
					
					
					<div class="visit">
					
					<i class="fab fa-instagram"></i>					
					</div>
					<div class="visit">
					<i class="fab fa-facebook-f"></i>
					</div>
					<div class="visit">
					<i class="fab fa-youtube"></i>
					</div>
					<div class="visit">
					<i class="fab fa-twitter"></i>
					</div>
				
				</div>
						
					</div>
					</div>
				</div>
				
				<div class="cpry">
				<p> © 2019 GHOOMLO .PRIVATE POLICY</p>
				
				</div>
			</div>
			


		
		
		

        <script  src="js/myscript.js"></script>

    </body>

</html>