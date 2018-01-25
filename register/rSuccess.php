<!DOCTYPE HTML>

<html>
	<head>
		<title>Εγγραφή</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="../myStyles.css">
		<link rel="icon" href="../icon.png">
	</head>
	
	<body>
		<br><a href="../homepage.php" class="return"> Επιστροφή στην αρχική σελίδα </a>
	
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
			
			$firstname = mysqli_real_escape_string($conn, $_POST['firstname']);
			$lastname = mysqli_real_escape_string($conn, $_POST['lastname']);
			$email = mysqli_real_escape_string($conn, $_POST['mail']);
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$pass = mysqli_real_escape_string($conn, $_POST['pass']);
			
			$query = mysqli_query($conn, "SELECT * FROM accounts WHERE username = '$username'");
			
			if (mysqli_num_rows($query) > 0){
				echo "<br><h1 class=\"success\">Το username που επιλέξατε χρησιμοποιείται...</h1>";
			}
			else{
				$sql = "INSERT INTO accounts(firstname, lastname, email, username, pass) VALUES ('$firstname', '$lastname', '$email', '$username', '$pass')";
				
			if($conn->query($sql) === TRUE){
				echo "<br><h1 class=\"success\">Η εγγραφή ολοκληρώθηκε με επιτυχία!</h1>";
			}
			else{
				echo "Error! :(";
			}
			}
			
			mysqli_close($conn);
		?>
		
	</body>
</html>