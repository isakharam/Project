<!docktype html>

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

		
			
			<div>
				<div class="tcon">
					<img src="img/wcover.jpg">
					<div class="tx">
					
						<h1>WILD LIFE SAFARI</h1>
						<p>“If there were one more thing I could do, it would be to go on safari once again.”</p>
			
					</div>		
			</div>
			
			
			</div>
		<div class="maincont">
				<div class="inner">
					<div class="overlay">
				
						
						<img src="img/wild1.jpg">
						
						<a href="final.php"><p>Satpura National Park</br>Madhya Pradesh</p></a>
				
					</div>	
		
		
		
				</div>
				<div class="inner">
					<div class="overlay">
				
				
						<img src="img/wild2.jpg">
						
						<a href="final.php"><p>Tadoba National Park</br>Maharashtra</p></a>
				
					</div>	
		
		
		
				</div>
				<div class="inner">
				<div class="overlay">
				
				
						<img src="img/wild3.jpeg">
						<a href="final.php"><p>Manas Wildlife Sanctuary</br>Assam</p></a>
							
						
				
					</div>
				</div>
				<div class="inner">
				<div class="overlay">
				
				
						<img src="img/wild4.jpg">
						<a href="final.php"><p>Sasan-Gir Wildlife Sanctuary</br>Gujarat</p></a>
							
						
				
					</div>
				</div>
				
		
			</div>
				<div class="maincont">
				<div class="inner">
					<div class="overlay">
				
				
						<img src="img/wild5.jpg">
						<a href="final.php"><p>Hemis National Park, Ladakh</p></a>
							</div>
						</div>
				
					
		
		
		
				
				<div class="inner">
				<div class="overlay">
				
				
						<img src="img/wild6.jpg">
						<a href="final.php"><p>Jim Corbett, Uttarakhand</p></a>
							
						
				
					</div></div>
				<div class="inner">
				<div class="overlay">
				
				
						<img src="img/wild7.jpg">
						<a href="final.php"><p>Jim Corbett, Uttarakhand</p></a>
							
				
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
						<a href="final.php"><p>REGISTRATION</p></a>
						
							
						
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