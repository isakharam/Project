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
			height:400px;
			
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
						<div class="front"><a href="about.html"><i class="fas fa-users"></i></div>
						<div class="back"><p>INFO</p>
						<div class="headic"></div>
						</div></a>
					</div>

					<div class="box">
						<div class="front"><a href="#"><i class="fas fa-map-marked-alt"></i></div>
						<div class="back"><p>PLANS</p><div class="headic"></div></div></a>
					</div>

					<div class="box">
						<div class="front"><a href="contact.html"><i class="fas fa-phone"></i></div>
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
			
			<img src="img/tc.jpg">
			
			
			<div class="text">
			<h1>TEARMS AND CONDITION</h1>
			<p>• These Terms and Conditions ("Agreement") governs the use of the services ("Service") that are made available by Website.
			com Solutions Inc. ("Website.com", "we" or "us"). These Terms and Conditions represent the whole agreement and understanding
			between Website.com and the individual or entity who subscribes to our service ("Subscriber" or "you").
			PLEASE READ THIS AGREEMENT CAREFULLY. By submitting your application and by your use of the Service, you agree to comply with all of the 
			terms and conditions set out in this Agreement. Website.com may terminate your account at any time, with or without notice, for conduct that
			 is in breach of this Agreement, for conduct that Website.com believes is harmful to its business, or for conduct where the use of the Service 
			 is harmful to any other party.Website.com may, in its sole discretion, change or modify this Agreement at any time,
			 with or without notice. Such changes or modifications shall be made effective for all Subscribers upon posting of the 
			 modified Agreement to this web address (URL): http://www.website.comm/terms-and-conditions/. You are responsible to read this document 
			 from time to time to ensure that your use of the Service remains in compliance with this Agreement.
</p>
			
			
			</div>
			
			
			
			
			</div>
			</center>
			
			

		
		
			
			
			
			<div class="container11">
				<div class="footer">
					<div class="fot">
						<div class="a1" id="aa1">
						<a href="about.html"><p>ABOUT US</p></a>
						<a href="company.html"><p>COMPANY</p></a>
						<a href="team.html"><p>THE TEAM</p></a>
							
						
						</div>
					</div>
					<div class="fot">
						<div class="a2" id="aa1">
						<a href="tc.html"><p>TEARMS & CONDITION</p></a>
						<a href="pvtpolicy.html"><p>PRIVATE POLICY</p></a>
						<a href="silo/login.html"><p>REGISTRATION</p></a>
						
							
						
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