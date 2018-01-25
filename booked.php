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
	$email = mysqli_real_escape_string($conn, $_SESSION['email']);
	$tickets = mysqli_real_escape_string($conn, $_POST['tickets']);
	$destination = mysqli_real_escape_string($conn, $_POST['destinations']);
	$arrival = mysqli_real_escape_string($conn, $_POST['arrival']);
	$departure = mysqli_real_escape_string($conn, $_POST['departure']);
	
	$days = floor((strtotime($departure) - strtotime($arrival)) / (60 * 60 * 24));
	
	function ticketCost($x){
		switch($x){
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
	
	$cost = ticketCost($destination) * $tickets * $days;
	
	$sql = "INSERT INTO book(Email, Εισητήρια, Προορισμός, Άφιξη, Αναχώρηση, Μέρες, Κόστος) VALUES ('$email', '$tickets', '$destination', '$arrival', '$departure', '$days', '$cost')";
		
	if($conn->query($sql) === TRUE){
		echo "Η κράτηση καταχωρήθηκε!";
	}
	else{
		echo "Error! :(";
	}
	
	mysqli_close($conn);
	
	header("Location:book.php");
?>
