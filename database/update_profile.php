<?php
	include("connection.php");
	include("logerror.php");
	session_start();
	$userID = $_SESSION["session"];

	// Controllo i dati e li pulisco
	$first = trim($_POST["firstname"]);
	$last = trim($_POST["lastname"]);
	$email = trim($_POST["email"]);
	
	// Controllo che i campi non siano vuoti
	if (empty($first) || empty($last) || empty($email)) {
		echo "Missing fields, please try again\n";
		header("Refresh: 1, url = ../show_profile.php");
		exit();
	}

	// Preparo la query di Update dei dati dell'utente
	$query = "UPDATE users SET firstname = ?, lastname = ?, email = ? WHERE userID = ?";
	if(!$stmt = $con->prepare($query)) {
		error_log("Prepare failed: (" . $con->errno . ") " . $con->error);
		exit("Something went wrong, visit us later");
	}

	// Lego lo statement ai tipi di parametri che deve aspettarsi
	$stmt->bind_param('sssi', $first, $last, $email, $userID);

	// Eseguo lo statement
	if (!$stmt->execute()) {
		error_log("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
		exit("Something went wrong, visit us later");
	}
	
	// Controllo se è stata modificata almeno una riga
	if($stmt->affected_rows === 0) {
		echo "No changes made\n";
		header("Refresh: 1, url = ../show_profile.php");
		exit();
	}
	
	// Chiudo lo statement e la connessione
	$stmt->close();
	$con->close();

	// Reindirizzamento alla pagina del profilo dopo l'aggiornamento
	header("Refresh: 0; url = ../show_profile.php");