<!DOCTYPE HTML>

<html>
	<head>
		<title>UniPi Travel</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="myStyles.css">
		<link rel="icon" href="icon.png">
	</head>
	
	<body>
		<header>
			<img src="icon.png" alt="logo" class="logo" usemap="#Map" /><br>
			<map name="Map" id="Map">
				<area alt="logo" href="homepage.php" shape="rect" coords="8,16,92,84" />
			</map>
			<nav>
				<ul>
					<li><a href="homepage.php">Αρχική</a></li>
					<li><a href="contact.php">Επικοινωνία</a></li>
					<li><a href="book.php">Κράτηση</a></li>
					<li><a href="info.php">Πληροφορίες</a></li>
					<?php
						session_start();
						
						if(isset($_SESSION['username'])){
							echo "<li class=\"loggedin\">Χρήστης: ".$_SESSION['username']."<br><a href=\"logout.php\" class=\"logout\">Αποσύνδεση</a></li>";
						}
						else{
							echo "<li class=\"account\"><a href=\"login/login.html\" id=\"login\">Είσοδος</a></li><li class=\"account\"><a href=\"register/register.html\" id=\"register\">Εγγραφή</a></li>";
						}
						
					?>
				</ul>
			</nav>
		</header>
		<h1 id="welcome">Καλώς ήρθατε στο UniPi Travel!</h1>
		
		<img src="images/RioDeJaneiro.jpg" width="100%" height="610px" id="cities">
		
		<script>	
			var cities = ["images/RioDeJaneiro.jpg", "images/Rome.jpg", "images/Barcelona.jpg", "images/Berlin.jpg", "images/Dubai.jpg", "images/London.jpg", "images/NewYork.jpg", "images/Paris.jpg"];
			var i = 0;
		
			function changeImage(){
				i++;
				
				if(i >= cities.length){
					i = 0;
				}
				
				document.getElementById("cities").src = cities[i];
			}
			
			setInterval(changeImage, 4000);
		</script>
		
		
	</body>
</html>