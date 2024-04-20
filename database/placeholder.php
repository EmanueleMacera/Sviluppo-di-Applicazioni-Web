<?php
session_start();
include("connection.php");
include("logerror.php");

// Verifica se l'utente è autenticato
if (!isset($_SESSION["session"])) {
    header("Location: ../login.php");
    exit();
}

$userID = $_SESSION["session"];

// Query di SELECT per ottenere i dati dell'utente
$query = "SELECT firstname, lastname, email, amount, bio, admin, newsletter FROM users WHERE userID = ?";

// Preparo la query di SELECT
if (!$stmt = $con->prepare($query)) {
    error_log("Prepare failed: (" . $con->errno . ") " . $con->error);
    exit("Something went wrong, visit us later");
}

// Lego lo statement ai tipi di parametri che deve aspettarsi
$stmt->bind_param('i', $userID);

// Eseguo lo statement
if (!$stmt->execute()) {
    error_log("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    exit("Something went wrong, visit us later");
}

// Ottengo il risultato
$result = $stmt->get_result();

// Verifica se ci sono risultati
if ($result->num_rows === 0) {
    echo "No user found";
} else {
    // Ottengo i dati dell'utente
    $row = $result->fetch_assoc();
    // Estraggo i dati necessari
    $first = $row["firstname"];
    $last = $row["lastname"];
    $email = $row["email"];
    $amount = $row["amount"];
    $bio = $row["bio"];
    $admin = $row["admin"];
    $newsletter = $row["newsletter"];
}

// Chiudo lo statement e la connessione
$stmt->close();
$con->close();

// Ora puoi utilizzare le variabili $first, $last, $email, $amount, $bio, $admin, $newsletter