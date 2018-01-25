<!DOCTYPE HTML>

<html>
	<head>
		<title>UniPi Travel (Πληροφορίες)</title>
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
		<h1 id="welcome">Πληροφορίες!</h1>
		<p id="pInfo">Πληροφορίες για εκδρομές:</p>
		<a href="info1.php" class="i">εντός Ευρώπης</a><br><hr><br><br>
		<a href="info2.php" class="i">εκτός Ευρώπης</a>
	</body>
</html>