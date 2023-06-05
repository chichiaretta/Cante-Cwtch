<?php
	session_start();

	require_once('../database/dati_connessione_db.php');

	if(!isset($_SESSION['username'])){ 
		header('location: login.php');
	}

	if( $_SESSION["tipologia"]!="cliente"){
	    header('location: logout.php');
	}

	$username = $_SESSION["username"];	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenotazioni Cwtch</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="../img/home/sfondo.png">
</head>

<html>
    <body style="background-color: white"> 
        <nav>
            <div class="tornahome">
                <a href="../index.html"><img src="../img/home/sfondo.png" alt=""></a>
                <p>Torna alla home</p>
            </div>
        </nav>

        <main style="background-color: white">
            <h2 style="color: black; margin: 0; padding-top: 125px; padding-bottom: 50px"><?php echo $username;?> compilando questo modulo prenoterai un tavolo che troverai <a style="color: black; text-decoration: underline" href="cliente/tab_prenotazioni_cliente.php">qui</a> oppure nella sezione "Le tue prenotazioni" nella tua home personale!</h2>
           
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <table class="tabaccesso">
                    <tr></tr>
                        <td><label for="username">Username:</label></td>
                        <td><?php echo $username; ?><br><br></td>
                    </tr>

                    <tr>
                        <td><label for="numero_persone">Numero di persone:</label></td>
                        <td><input type="number" name="numero_persone" required><br><br></td>
                    </tr>

                    <tr>
                        <td><label for="data_prenotazione">Data prenotazione:</label></td>
                        <td><input type="date" name="data_prenotazione" required><br><br></td>
                    </tr>

                    <tr>
                        <td><label for="ora_prenotazione">Ora prenotazione:</label></td>
                        <td><input type="time" name="ora_prenotazione" required><br><br></td>
                    </tr>
                </table>

                <p style="text-align: center"><input type="submit" value="Prenota"></p>
            </form>

            <?php
                $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
                if ($conn->connect_error) {
                    die("Connessione al database fallita: " . $conn->connect_error);
                }


                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $numeroPersone = $_POST["numero_persone"];
                    $dataPrenotazione = $_POST["data_prenotazione"];
                    $oraPrenotazione = $_POST["ora_prenotazione"];

                    $myquery = "SELECT data_prenotazione, ora_prenotazione 
                            FROM prenotazioni 
                            WHERE data_prenotazione='$dataPrenotazione'
                                AND ora_prenotazione = '$oraPrenotazione'";

                    $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");

                    if ($ris->num_rows > 0) {
                        echo "C'è già una prenotazione per questo giorno a questo orario";
                    } else {

                        $sql = "INSERT INTO prenotazioni (username, numero_persone, data_prenotazione, ora_prenotazione)
                                VALUES ('$username', '$numeroPersone', '$dataPrenotazione', '$oraPrenotazione')";
                        
                        if ($conn->query($sql) === TRUE) {
                            $conn->close();
                            echo "Prenotazione effettuata con successo!<br>sarai ridirezionato alla home tra 5 secondi.";
                            header('Refresh: 2; URL=home.php');
                        } else {
                            echo "Errore durante la prenotazione: " . $conn->error;
                        }

                    }
                }

                
            ?>
        </main>
    </body>

</html>