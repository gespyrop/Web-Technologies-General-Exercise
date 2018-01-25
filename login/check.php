<!DOCTYPE HTML>

<html>
	<head>
		<title>Είσοδος</title>
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
			
			$username = mysqli_real_escape_string($conn, $_POST['username']);
			$pass = mysqli_real_escape_string($conn, $_POST['pass']);
			
			
			$sql = "SELECT * FROM accounts WHERE username='$username' AND pass='$pass'";
			
			$result = mysqli_query($conn, $sql);
			
			if (mysqli_num_rows($result) > 0){
				$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM accounts WHERE username='$username'"));
				$email = $row['email'];
		
				session_start();
				$_SESSION['username'] = $username;
				$_SESSION['email'] = $email;
				
				header("Location:../homepage.php");
			}
			else{
				echo "<h1 class=\"fail\">Ο χρήστης δεν βρέθηκε!</h1>";
			}
			
			mysqli_close($conn);
		?>
	</body>
</html>