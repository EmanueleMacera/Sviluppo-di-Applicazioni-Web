<?php
// Include i file di connessione al database e per la gestione degli errori
include("connection.php");
include("logerror.php");

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

// Crea un'istanza di PHPMailer; passando `true` abilita le eccezioni
$mail = new PHPMailer(true);

try {
    // Impostazioni del server
    $mail->SMTPDebug = PHPMailer::DEBUG_OFF;                    // Disabilita l'output di debug
    $mail->isSMTP();                                            // Invia tramite SMTP
    $mail->Host       = 'smtp.gmail.com';                       // Server SMTP
    $mail->SMTPAuth   = true;                                   // Abilita l'autenticazione SMTP
    $mail->Username   = 'stemacripto@gmail.com';                // Nome utente Gmail
    $mail->Password   = 'Stemacripto00.';                       // Password Gmail
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            // Abilita crittografia SMTPS
    $mail->Port       = 465;                                    // Porta TCP per la connessione

    // Mittente
    $mail->setFrom('stemacripto@gmail.com');

    // Preparo la query di SELECT per ottenere gli utenti che hanno la newsletter attiva
    $query = "SELECT email FROM users WHERE newsletter = 1";
	
	// Preparo lo statement
	if(!$stmt = $con->prepare($query)) {
		error_log("Prepare failed: (" . $con->errno . ") " . $con->error);
		exit("Something went wrong, visit us later\n");
	}

	// Eseguo lo statement
	if (!$stmt->execute()) {
		error_log("Execute failed: (" . $stmt->errno . ") " . $stmt->error);
		exit("Something went wrong, visit us later\n");
	}
	
	// Ottengo il risultato
	$result = $stmt->get_result();
	
	// Controllo se ci sono risultati
	if ($result->num_rows === 0) {	
		echo "No subscribers found\n";
	} else {
		// Aggiungi gli indirizzi email in BCC
		while($row = $result->fetch_array()) {
			$mail->addBCC($row['email']);
		}
	}

    //Contenuto dell'email
    $mail->isHTML(true);                                  // Formato HTML
    $mail->Subject = $_POST["subject"];
    $mail->Body    = $_POST["newsletter"];
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    // Invia l'email
    $mail->send();
    echo 'Message has been sent';

    // Reindirizza l'utente alla pagina del profilo dopo l'invio
    header("Refresh: 0, url = ../profile.php");
    exit;
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    // Reindirizza alla pagina di gestione della newsletter in caso di errore
    header("Refresh: 0, url = ../newsletter.php");
    exit();
}

// Chiudo lo statement e la connessione
$stmt->close();
$con->close();