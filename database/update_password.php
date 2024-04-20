<?php
include("connection.php");
include("logerror.php");
session_start();
$userID = $_SESSION["session"];

// Controllo e pulizia dei dati
$oldpass = trim($_POST["oldpass"]);
$newpass = trim($_POST["newpass"]);
$confpass = trim($_POST["confpass"]);

// Controllo che i campi non siano vuoti
if (empty($oldpass) || empty($newpass) || empty($confpass)) {
    echo "Missing fields, please fill all the fields\n";
    header("Refresh: 1, url = ../update_password.php");
    exit();
}

// Preparo la query di SELECT cercando la password corrispondente nel database
$query = "SELECT * FROM users WHERE userID = ?";
if(!$stmt = $con->prepare($query)) {
    error_log("Prepare failed: (" . $con->errno . ") " . $con->error);
    exit("Something went wrong, visit us later\n");
}

// Lego lo statement ai tipi di parametri che deve aspettarsi, 's' sta per string
$stmt->bind_param('i',$userID);

// Eseguo lo statement
if (!$stmt->execute()) {
    error_log("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    exit("Something went wrong, visit us later\n");
}
// Ottengo il risultato
$result = $stmt->get_result();

if ($result->num_rows === 0) {    
    echo "User not found\n";
    exit;
} else {
    $row = $result->fetch_array();
}

// Controllo che l'hash della password corrisponda alla vecchia password
if(!password_verify($oldpass, $row["password"])) {
    echo "Incorrect old password, try again\n";
    header("Refresh: 1, url = ../update_password.php");
    exit;
}

// Controllo che le nuove password corrispondano
if($newpass !== $confpass) {
    echo "New passwords do not match!\n";
    header("Refresh: 1, url = ../update_password.php");
    exit();
}

// Genero l'hash per la nuova password
$hash = password_hash($newpass, PASSWORD_DEFAULT);

// Preparo la query di Update dei dati dell'utente
$query = "UPDATE users SET password = ? WHERE userID = ?";
if(!$stmt = $con->prepare($query)) {
    error_log("Prepare failed: (" . $con->errno . ") " . $con->error);
    exit("Something went wrong, visit us later");
}

// Lego lo statement ai tipi di parametri che deve aspettarsi
$stmt->bind_param('si', $hash, $userID);

// Eseguo lo statement
if (!$stmt->execute()) {
    error_log("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    exit("Something went wrong, visit us later");
}

// Chiudo lo statement e la connessione
$stmt->close();
$con->close();

// Reindirizzo alla pagina di logout dopo il cambio password
header("Refresh: 0; url = logout.php");