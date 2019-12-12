<!docktype html>

	<html>
		<head>
			<title>ROAD TRIP</title>
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<meta charset="UTF-8" name="viewport" content="width=device-width, inital-scale=1">
			<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
			rel="stylesheet">
			 <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
			<link href="css/mdb.min.css" rel="stylesheet">
			<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet'>
			  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
			<style>*{

				padding:0px;
				margin:0px;

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

		
			
			<div>
				<div class="tcon">
					<img src="img/p1.jpg">
					<div class="tx">
					
						<h1>ROAD TRIP</h1>
						<p>“The wise man travels to discover himself.”</p>
			
					</div>		
			</div>
			
			
			</div>
			<div class="maincont">
				<div class="inner">
					<div class="overlay">
				
						
						<img src="img/r1.jpg">
						
						<a href="final.php"><p> Manali to Leh Highway </br> Distance - 479 Kms</p></a>
				
					</div>	
		
		
		
				</div>
				<div class="inner">
					<div class="overlay">
				
				
						<img src="img/r2.jpg">
						
						<a href="final.php"><p> Visakhapatnam to Araku Valley </br> Distance - 116 Kms</p></a>
				
					</div>	
		
		
		
				</div>
				<div class="inner">
				<div class="overlay">
				
				
						<img src="img/r3.jpg">
						<a href="final.php"><p>Puri to Konark on the NH 203 </br> Distance - 36 Kms</p></a>
							
						
				
					</div>
				</div>
				<div class="inner">
				<div class="overlay">
				
				
						<img src="img/r4.jpg">
						<a href="final.php"><p>Gangtok to Lake Tsomgo and Nathu La Pass </br> Distance - 56 Kms</p></a>
							
						
				
					</div>
				</div>
				
		
			</div>
				<div class="maincont">
				<div class="inner">
					<div class="overlay">
				
				
						<img src="img/r5.jpg">
						<a href="final.php"><p>Shimla to Manali via Kinnaur and Spiti </br> Distance - 645 Kms</p></a>
							</div>
						</div>
				
					
		
		
		
				
				<div class="inner">
				<div class="overlay">
				
				
						<img src="img/r6.jpg">
						<a href="final.php"><p>Chennai to Munnar </br> Distance - 585 Kms</p></a>
							
						
				
					</div></div>
				<div class="inner">
				<div class="overlay">
				
				
						<img src="img/r7.jpg">
						<a href="final.php"><p> Delhi to Jaipur : Distance - 281 Kms</p></a>
							
				
					</div></div>
			</div>
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
		</body>
	</html>