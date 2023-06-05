<?php
	session_start();
	require_once('../../database/dati_connessione_db.php');

	if(!isset($_SESSION['username']))
    { 
		header('location: ../login.php');
	}
	if( $_SESSION["tipologia"]!="dipendente")
    {
	    header('location: ../logout.php');
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
    <link rel="stylesheet" href="../../style.css">
    <link rel="icon" href="../../img/home/sfondo.png">
</head>

<html>
    <body style="background-color: white"> 
        <nav>
            <div class="tornahome">
                <a href="../../index.html"><img src="../../img/home/sfondo.png" alt=""></a>
                <p>Torna alla home</p>
            </div>
        </nav>

        <main style="background-color: white">
            <h2 style="color: black; margin: 0; padding-top: 125px; padding-bottom: 50px">Orari di <?php echo $username;?></h2>
           
            <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
                <table class="tabaccesso">
                    <tr></tr>
                    <tr>
                        <td><label for="data">Data:</label></td>
                        <td><input type="date" name="data" required><br><br></td>
                    </tr>
                    <tr>
                        <td><label for="ore_lavoro">Ore di lavoro:</label></td>
                        <td><input type="number" name="ore_lavoro" required><br><br></td>
                    </tr>
                    <tr>
                        <td><label for="orario_inizio">Orario di inzio:</label></td>
                        <td><input type="time" name="ora_inizio" required><br><br></td>
                    </tr>
                    <tr>
                        <td><label for="orario_fine">Orario di uscita:</label></td>
                        <td><input type="time" name="ora_fine" required><br><br></td>
                    </tr>
                </table>
                <p style="text-align: center"><input type="submit" value="Timbra"></p>
            </form>

            <?php
                $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
                if ($conn->connect_error) {
                    die("<p style='width: 100%; text-align: center'>Connessione al database fallita: " . $conn->connect_error. "</p>");
                }

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $data = $_POST["data"];
                    $ore_lavoro = $_POST["ore_lavoro"];
                    $ora_inizio = $_POST["ora_inizio"];
                    $ora_fine = $_POST["ora_fine"];


                    $myquery = "SELECT data, ora_inizio 
                            FROM timbra 
                            WHERE data='$data'
                                AND ora_inizio = '$ora_inizio'";

                    $ris = $conn->query($myquery) or die("<p style='width: 100%; text-align: center'>Query fallita!</p>");

                    if ($ris->num_rows > 0) {
                        echo "<p style='width: 100%; text-align: center'>Hai già timbrato in questo orario!</p>";
                    } else {

                        $sql = "INSERT INTO timbra (username, data, ore_lavoro, ora_inizio, ora_fine)
                                VALUES ('$username', '$data', '$ore_lavoro', '$ora_inizio', '$ora_fine')";
                        
                        if ($conn->query($sql) === TRUE) {
                            $conn->close();
                            echo "<p style='width: 100%; text-align: center'>Hai timbrato per questo turno!<br>sarai ridirezionato alla home tra 2 secondi.</p>";
                            header('Refresh: 2; URL=../home.php');
                        } else {
                            echo "<p style='width: 100%; text-align: center'>Errore durante l'azione di timbraggio: " . $conn->error . "</p>";
                        }

                    }
                }

                
            ?>
        </main>
    </body>

</html>