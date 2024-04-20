<?php
include("connection.php");
include("logerror.php");

// Controllo i dati e li pulisco
$email = trim($_POST["email"]);
$pass = trim($_POST["pass"]);

// Controllo che i campi non siano vuoti
if (empty($email) || empty($pass)) {
    header("Refresh: 0, url = ../login.php");
    exit;
}

// Preparo la query di SELECT cercando l'email corrispondente nel database
$query = "SELECT * FROM users WHERE email = ?";
if (!$stmt = $con->prepare($query)) {
    error_log("Prepare failed: (" . $con->errno . ") " . $con->error);
    exit("Something went wrong, visit us later\n");
}

// Lego lo statement ai tipi di parametri che deve aspettarsi, 's' sta per string
$stmt->bind_param('s', $email);

// Eseguo lo statement
if (!$stmt->execute()) {
    error_log("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    exit("Something went wrong, visit us later\n");
}

// Ottengo il risultato
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "Incorrect access credentials, try again\n";
    header("Refresh: 1, url = ../login.php");
    exit;
}

// Ottengo il risultato
$row = $result->fetch_array(MYSQLI_ASSOC);

// Controllo validità email e password
// Controllo che l'email nel db coincida con quella del form
// Controllo che l'hash della password coincida con la password del form tramite password_verify()
if ($email !== $row["email"] || !password_verify($pass, $row["password"])) {
    echo "Incorrect access credentials, try again\n";
    header("Refresh: 1, url = ../login.php");
    exit;
} else {
    // Credenziali corrette, inizio una sessione e reindirizzo l'utente
    session_start();
    // Uso come variabile di sessione l'userID dell'utente che è univoco
    $_SESSION["session"] = $row["userID"];
    header("Refresh: 0, url = ../profile.php");
    exit;
}

// Chiudo lo statement e la connessione (opzionale)
$stmt->close();
$con->close();