<!DOCTYPE HTML>

<html>
	<head>
		<title>UniPi Travel (Επικοινωνία)</title>
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
		<h1 id="welcome">Επικοινωνία!</h1>
		
		<table border="5" style="border-color: #ff6">
			<tr><th>Διεύθυνση</th><th>Τηλέφωνο Επικοινωνίας</th><th>Ώρες Γραφείου</th><tr/>
			<tr><td>Καραολή & Δημητρίου 80</td><td>6981973255</td><td>10:00 - 18:00</td></tr>
		</table>
		<hr><br>
		
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3146.5208070315025!2d23.650822215000236!3d37.941623779729404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14a1bbe5bb8515a1%3A0x3e0dce8e58812705!2zzqDOkc6dzpXOoM6ZzqPOpM6XzpzOmc6fIM6gzpXOmc6hzpHOmc6pzqM!5e0!3m2!1sel!2sgr!4v1514941974245" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
		<hr>
		
		<?php
			if(isset($_SESSION['username'])){
				echo "<form id=\"f\" name=\"f\" method=\"POST\">
						<textarea name=\"message\" id=\"message\"></textarea><br><br>
						<input type=\"submit\" value=\"Αποστολή\" class=\"acc\" id=\"send\">
					</form>
					
					<script>
						var form = document.getElementById('f');
						
						function send(){			
							document.f.action = \"mailto:giwrgosspyropoulos@gmail.com?subject=UniPi Travel Message&body=Email: ".$_SESSION['email']."%0D%0AΜήνυμα: \" + document.getElementById('message').value + \"%0D%0A\";
							}
						
						form.onsubmit = function() {send()};
					</script>";
			}
			else{
				echo "<form>
						<textarea name=\"message\" id=\"message\" disabled placeholder=\"Για την αποστολή μηνύματος παρακαλώ συνδεθείτε!\"></textarea><br><br>
					</form>";
			}
		?>

	</body>