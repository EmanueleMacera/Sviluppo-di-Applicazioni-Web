<?php

// Dati di accesso al database
$servername = "localhost";
$username = "?";
$password = "?";
$database = "?";

// Connessione al database
$con = new mysqli($servername, $username, $password, $database);

// Verifica della connessione
if ($con->connect_error) {
    die("Failed to connect to MySQL: " . $con->connect_error);
}

// Imposta il set di caratteri per la connessione a UTF-8
if (!$con->set_charset("utf8")) {
    printf("Error loading character set utf8: %s\n", $con->error);
}

// Evita l'iniezione SQL e pulisce i dati
function clean_input($con, $data) {
    return mysqli_real_escape_string($con, trim($data));
}

?>
