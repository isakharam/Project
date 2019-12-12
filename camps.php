<!DOCTYPE HTML>
	<html>
		<head>
			<title>CAMPS</title>
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
			body{
				margin:0;
				padding:0;
				}

				.b1{

				height:650px;
				width:1280px;
				margin: 18px auto 0;
				background-color:#F5F5F5;
				display:flex;
				flex-direction:row;
				flex-wrap:wrap;


				}

				.bb1
				{
				 position:relative;
				 width:300px;
				 height:300px;
				 margin:10px;
				 box-sizing:border-box;
				 display:inline-block;

				}

				.b1 .bb1 .imbx{
				position:relative;
				overflow:hidden;

				}
				.imbx img{
				width:300px;
				height:300px;
				margin-top:0px;
				transition: transform 2s;

				} 
				.bb1:hover .imbx img
				{
				transform: scale(1.2);
				}

				.info{
				position:absolute;
				top:10px;
				right:10px;
				bottom:10px;
				left:10px;
				background:#64B5F6E1;
				box-shadow: 5px 10px 18px #37474F;
				border:1px solid #64B5F6E1;
				border-radius:8px;
				opacity:0.8;
				transform:scaleY(0);
				transition: transform 0.5s;


				}
				.bb1:hover .info{
				transform:scaleY(1);

				}




				.iinn{
					position:absolute;
					top:50%;
					transform: translateY(-50%);
					text-align:center;
					padding:15px;
					color:white;



				}
				.iinn h2{
				margin:0;
				padding:0;
				font-size20px;


				}
				.iinn p{
				margin:10px 0 0;
				padding:0;



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
				echo"<a href='final.php'><button type='button' id='reg'>LOGIN</button></a>
					
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
			<div class="tcon">
					<img src="img/camcover.jpg">
					<div class="tx">
						<center>
						<h1>CAMPS</h1>
						<p>"Welcome to our bonfire where friends and marshmallows get toasted."</p></center>
					</div>		
			</div>
		
				<div class="b1">
		<div class="bb1">
			<div class="imbx">
				<img src="img/camp1.jpg">
			</div>
			<div class="info">
				<a href="final.php">
				<div class="iinn">
				<h2>Camp Exotica</h2>
				<p> Kullu</p>
				</div></a>
			</div>
		</div>
		<div class="bb1">
			<div class="imbx">
				<img src="img/camp2.jpg">
			</div>
			<div class="info">
				<a href="final.php">
				<div class="iinn">
				<h2> Rishikesh Valley camp</h2>
				<p>Rishikesh</p>
				</div></a>
			</div>
		
		</div>
		<div class="bb1">
			<div class="imbx">
				<img src="img/camp3.jpg">
			</div>
			<div class="info">
				<a href="final.php">
				<div class="iinn">
				<h2>Nameri Eco Camp</h2>
				<p>Assam</p>
				</div></a>
			</div>
		
		</div>
		<div class="bb1">
			<div class="imbx">
				
				<img src="img/camp4.jpg">
			</div>
			<div class="info">
				<a href="final.php">
				<div class="iinn">
				<h2>Osian Camp Resort</h2>
				<p>Rajasthan</p>
				</div></a>
			</div>
		
		</div>
		<div class="bb1">
			<div class="imbx">
				<img src="img/camp5.jpg">
			</div>
			<div class="info">
				<a href="final.php">
				<div class="iinn">
				<h2> Seagot</h2>
				<p>Wayanad</p>
				</div></a>
			</div>
		
		</div>
		<div class="bb1">
			<div class="imbx">
				<img src="img/camp6.jpg">
			</div>
			<div class="info">
				<a href="final.php">
				<div class="iinn">
				<h2> Chardham Camp</h2>
				<p>Kedarnath</p>
				</div></a>
			</div>
		
		</div>
		<div class="bb1">
			<div class="imbx">
				<img src="img/camp7.jpg">
			</div>
			<div class="info">
				<a href="final.php">
				<div class="iinn">
				<h2> Magpie Camp</h2>
				<p>Chopta</p>
				</div></a>
			</div>
		</div>
		<div class="bb1">
			<div class="imbx">
				<img src="img/camp8.jpg">
			</div>
			<div class="info">
				<a href="final.php">
				<div class="iinn">
				<h2> Damodara Desert Camp</h2>
				<p>Jaisalmer</p>
				</div></a>
			</div>
		
		</div>
	</div>
	
	<hr>
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

	
		<body>
	</html>
	