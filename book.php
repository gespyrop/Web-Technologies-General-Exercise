<!DOCTYPE HTML>

<html>
	<head>
		<title>UniPi Travel (Κράτηση)</title>
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
		<h1 id="welcome">Κράτηση!</h1>
		<?php
			if(isset($_SESSION['username'])){
			echo "
				<fieldset id=\"book\">
					<legend>Κράτηση</legend>
					<form id=\"b\" name=\"b\" method=\"POST\">
						<label for=\"tickets\">Εισητήρια</label><input type=\"number\" name=\"tickets\" id=\"tickets\" min=\"1\" value=\"1\">
						<label for=\"destinations\">Προορισμοί</label>
						<select name=\"destinations\" id=\"destinations\">
							<option value=\"Βαρκελώνη\">Βαρκελώνη (100€)</option>
							<option value=\"Βερολίνο\">Βερολίνο (30€)</option>
							<option value=\"Λονδίνο\">Λονδίνο (50€)</option>
							<option value=\"Παρίσι\">Παρίσι(80€)</option>
							<option value=\"Ρώμη\">Ρώμη (30€)</option>
							<option value=\"Νέα Υόρκη\">Νέα Υόρκη (340€)</option>
							<option value=\"Ντουμπάι\">Ντουμπάι (270€)</option>
							<option value=\"Ρίο ντε Τζανέιρο\">Ρίο ντε Τζανέιρο (600€)</option>
						</select><br>
						<label for=\"arrival\">Άφιξη</label><input type=\"date\" name=\"arrival\" id=\"arrival\">
						<label for=\"departure\">Αναχώρηση</label><input type=\"date\" name=\"departure\" id=\"departure\">
						<input type=\"submit\" value=\"Κράτηση\" id=\"sub\" class=\"acc\">
					</form>
				</fieldset>
				<hr><strong><p id=\"pSearch\">Αναζητήστε τις καταχωρημένες κρατήσεις σας!</p></strong><br>
				<a href=\"search.php\" id=\"search\">Αναζήτηση</a><br><br>
				";
			}
			else{
				echo "<h1 id=\"connect\">Για να κάνετε κράτηση παρακαλώ συνδεθέιτε!</h1>";
			}
		?>
		
		<script>
			var form = document.getElementById('b');
			
			var conf = false;
			
			function ticketCost(x){
				switch(x){
					case "Βαρκελώνη": 
						return 100;
						break;
					case "Λονδίνο": 
						return 50;
						break;
					case "Παρίσι": 
						return 80;
						break;
					case "Νέα Υόρκη": 
						return 340;
						break;
					case "Ντουμπάι": 
						return 270;
						break;
					case "Ρίο ντε Τζανέιρο":
						return 600;
						break;
					default:
						return 30;
				}
			}
			
			function sbmt(){
				var tickets = document.getElementById("tickets").value;
				var arrival = document.getElementById("arrival").value;
				var departure = document.getElementById("departure").value;
				var destination = document.getElementById("destinations").value;
				var days = parseInt((new Date(departure).getTime() - new Date(arrival).getTime()) * 1.15740741 / 100000000);
				var cost = ticketCost(destination) * tickets * days;
				
				if(arrival == ""){
					alert("Συμπληρώστε ημερομηνία άφιξης!");				
				}
				else if(departure == ""){
					alert("Συμπληρώστε ημερομηνία αναχώρησης!");
				}
				else if(days <= 0){
					alert("Η ημερομηνία αναχώρησης θα πρέπει να είναι μετά την ημερομηνία άφιξης!");
				}
				else{
					if(tickets == 1){
						message = "Θέλτε σίγουρα να κλέισετε 1 εισητήριο για " + destination + " για " + days + " ημέρες;\nΣυνολικό κόστος: " + cost + "€";
						conf = confirm(message);
					}
					else{
						message = "Θέλτε σίγουρα να κλέισετε " + tickets + " εισητήρια για " + destination + " για " + days + " ημέρες;\nΣυνολικό κόστος: " + cost + "€";
						conf = confirm(message);
					}
				}
				
				if(conf == true){
					alert("Η κράτηση καταχωρήθηκε!")
					document.b.action = "booked.php";
				}
			}
			
			form.onsubmit = function() {sbmt()};
		</script>
	</body>
</html>