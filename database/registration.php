<?php
include("connection.php");
include("logerror.php");

// Funzione per la redirect
function redirect($message, $url) {
    echo $message;
    header("Refresh: 2; url = $url");
    exit();
}

// Controlli sui campi del form
if (empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["email"]) || empty($_POST["pass"]) || empty($_POST["confirm"])) {
    redirect("Missing fields, please fill all the required fields!", "../registration.php");
}

$firstname = trim($_POST["firstname"]);
$lastname = trim($_POST["lastname"]);
$email = trim($_POST["email"]);
$pass = trim($_POST["pass"]);
$confpass = trim($_POST["confirm"]);

// Controllo che le password combacino
if ($pass != $confpass) {
    redirect("Passwords do not match!", "../registration.php");
}

// Hash della password
$hash = password_hash($pass, PASSWORD_DEFAULT);

// Query per verificare se l'email esiste già nel database
$query = "SELECT email FROM users WHERE email = ?";
if (!$stmt = $con->prepare($query)) {
    error_log("Prepare failed: (" . $con->errno . ") " . $con->error);
    exit("Something went wrong, visit us later\n");
}

// Bind dei parametri e esecuzione della query
$stmt->bind_param('s', $email);
if (!$stmt->execute()) {
    error_log("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    exit("Something went wrong, visit us later\n");
}

$result = $stmt->get_result();

// Controllo se l'email esiste già nel database
if ($result->num_rows === 1) {
    redirect("Email already exists, please choose another one.", "../login.php");
} else {
    // Query per l'inserimento dei dati nel database
    $queryInsert = "INSERT INTO users (firstname, lastname, email, password) VALUES (?, ?, ?, ?)";
    
    if (!$stmtInsert = $con->prepare($queryInsert)) {
        error_log("Prepare failed: (" . $con->errno . ") " . $con->error);
        exit("Something went wrong, visit us later\n");
    }

    // Bind dei parametri e esecuzione dell'inserimento
    $stmtInsert->bind_param('ssss', $firstname, $lastname, $email, $hash);

    if (!$stmtInsert->execute()) {
        error_log("Execute failed: (" . $stmtInsert->errno . ") " . $stmtInsert->error);
        exit("Something went wrong, visit us later\n");
    }

    // Controllo che siano state inserite righe nel database
    if ($stmtInsert->affected_rows === 0) {
        echo "No rows inserted\n";
        exit;
    } else {
        redirect("Registration successful! You can now login.", "../login.php");
    }
}

// Chiudo gli statement e la connessione
$stmt->close();
$stmtInsert->close();
$con->close();