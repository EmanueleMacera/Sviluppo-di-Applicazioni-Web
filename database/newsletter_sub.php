<?php
// Includo il file di connessione al database e il file per la gestione degli errori
include("connection.php");
include("logerror.php");

// Avvio la sessione
session_start();

// Controllo se esiste un userID nella sessione
if (!isset($_SESSION["session"])) {
    exit("Unauthorized access");
}

// Ottengo l'userID dalla sessione
$userID = $_SESSION["session"];

// Preparo la query di UPDATE per impostare la newsletter a 1 per l'userID specifico
$query = "UPDATE users SET newsletter = 1 WHERE userID = ?";

// Preparo lo statement
if (!$stmt = $con->prepare($query)) {
    error_log("Prepare failed: (" . $con->errno . ") " . $con->error);
    exit("Something went wrong, visit us later");
}

// Lego lo statement ai tipi di parametri che deve aspettarsi, 'i' sta per int
$stmt->bind_param('i', $userID);

// Eseguo lo statement
if (!$stmt->execute()) {
    error_log("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    exit("Something went wrong, visit us later");
}

// Chiudo lo statement
$stmt->close();

// Chiudo la connessione
$con->close();

// Reindirizzo l'utente alla pagina del profilo
header("Refresh: 0, url = ../profile.php");
exit;