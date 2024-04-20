<?php
include("connection.php");
include("logerror.php");
session_start();

// Verifica se l'utente è loggato
if (!isset($_SESSION["session"])) {
    header("Location: login.php");
    exit();
}

$userID = $_SESSION["session"];

// Controlla se è stato effettuato una ricerca
if (!isset($_GET["search"]) || empty(trim($_GET["search"]))) {
    header("Location: search.php");
    exit();
}

// Pulisce e prepara la ricerca per l'uso nella query
$search = "%" . trim($_GET["search"]) . "%";

$query = "SELECT * FROM search WHERE keywords LIKE ? OR name LIKE ?";

if (!$stmt = $con->prepare($query)) {
    error_log("Prepare failed: (" . $con->errno . ") " . $con->error);
    exit("Something went wrong, please try again later");
}

$stmt->bind_param('ss', $search, $search);

if (!$stmt->execute()) {
    error_log("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
    exit("Something went wrong, please try again later");
}

$result = $stmt->get_result();

if ($result->num_rows === 0) {
    $message = "We were unable to find a page with a search term of " . htmlspecialchars($search);
    header("Refresh: 2; url=../home_log.php");
    exit($message);
} else {
    $row = $result->fetch_array();
    header("Location: " . $row['keywords']);
}

$stmt->close();
$con->close();