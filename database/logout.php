<?php
// Inizio o ripristino la sessione
session_start();

// Resetto tutti i valori della sessione
$_SESSION = [];

// Ottengo i parametri del cookie di sessione
$params = session_get_cookie_params();

// Per far scadere il cookie di sessione
setcookie(session_name(), '', time() - 42000, $params["path"], $params["domain"], $params["secure"], $params["httponly"]);

// Distruggo la sessione
session_destroy();

// Reindirizzo l'utente alla pagina di login
header("Refresh: 0; url = ../login.php");
exit;