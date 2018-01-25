<!DOCTYPE HTML>

<html>
	<head>
		<title>UniPi Travel (Κράτηση)</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="myStyles.css">
		<link rel="icon" href="icon.png">
	</head>
	
	<body>
		<br><a href="homepage.php" class="return"> Επιστροφή στην αρχική σελίδα </a>
		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "travel";

			$conn = mysqli_connect($servername, $username, $password, $dbname);
			
			if (!$conn) {
				die("Connection failed: " . mysqli_connect_error());
			}

			mysqli_set_charset($conn, "utf8");
			
			session_start();
			$sql = "SELECT * FROM book WHERE Email ='".$_SESSION['email']."'";
			
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0) {
				echo "<table id=\"results\">";
				echo "<tr><th>Εισητήρια</th><th>Προορισμός</th><th>Άφιξη</th><th>Αναχώρηση</th><th>Μέρες</th><th>Κόστος</th></tr>";
				
				// εκτύπωση αποτελεσμάτων
				while($row = mysqli_fetch_assoc($result)){
				echo "<tr><td>".$row['Εισητήρια']."</td>".
					"<td>".$row['Προορισμός']."</td>".
					"<td>".$row['Άφιξη']."</td>".
					"<td>".$row['Αναχώρηση']."</td>".
					"<td>".$row['Μέρες']."</td>".
					"<td>".$row['Κόστος']."€</td></tr>";
				 }
				echo "</table>" ;
			} else {
				echo "<p>Δεν έχετε κάνει καμία κράτηση!</p>";
			}
			
			mysqli_close($conn);
		?>
	</body>
</html>