<?php
include("database/connection.php");
include("database/logerror.php");
session_start();
$userID = $_SESSION["session"];

// Controllo i dati e li pulisco
$coin = isset($_POST["coin"]) ? intval($_POST["coin"]) : 0;

if ($coin <= 0) {
    exit("Invalid coin amount");
}

// Preparo la query di UPDATE per aggiornare il saldo dell'utente
$query = "UPDATE users SET amount = amount + ? WHERE userID = ?";
if (!$stmt = $con->prepare($query)) {
    error_log("Prepare failed: (" . $con->errno . ") " . $con->error);
    exit("Something went wrong, please try again later\n");
}

// Lego lo statement ai tipi di parametri che deve aspettarsi, 'ii' sta per due interi
$stmt->bind_param('ii', $coin, $userID);

// Eseguo lo statement
if (!$stmt->execute()) {
    error_log("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    exit("Something went wrong, please try again later\n");
}

// Chiudo lo statement e la connessione (opzionale)
$stmt->close();
$con->close();

// Redirect alla pagina del profilo dopo 1 secondo
header("Refresh: 1, url=../profile.php");
