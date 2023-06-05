<?php
    session_start();
    require("../../database/dati_connessione_db.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prenotazioni Tavoli</title>
    <link rel="stylesheet" href="../../style.css">
    <link rel="icon" href="../../img/home/sfondo.png">
</head>

<body style="background-color: white"> 
    <nav>
        <div class="tornahome">
            <a href="../home_clienti.php"><img src="../../img/home/sfondo.png" alt=""></a>
            <p>Torna alla home</p>
        </div>
    </nav>

    <main style="background-color: white">
        <h2 style="color: black; margin: 0; padding-top: 50px; padding-bottom: 50px">Prenotazioni Tavoli</h2>

        <?php
            $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
            if ($conn->connect_error) {
                die("<p style='width: 100%; text-align: center'>Connessione al database fallita: " . $conn->connect_error."</p>");
            }

            $username = $_SESSION["username"];

            $myquery = "SELECT * FROM prenotazioni WHERE username = '$username'";

            $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");

            if ($ris->num_rows > 0) {
                echo "<table class='tabaccesso'>";
                echo "<tr><th>Username</th><th>Numero Persone</th><th>Data Prenotazione</th><th>Ora Prenotazione</th></tr>";
                echo "<tr><td colspan='4'><hr style='margin: 0px'></td></tr>";
                
                while ($row = $ris->fetch_assoc()) {
                    $numeroPersone = $row["numero_persone"];
                    $dataPrenotazione = $row["data_prenotazione"];
                    $oraPrenotazione = $row["ora_prenotazione"];

                    echo "<tr style='text-align: center'>";
                    echo "<td>" . $username . "</td>";
                    echo "<td>" . $numeroPersone . "</td>";
                    echo "<td>" . $dataPrenotazione . "</td>";
                    echo "<td>" . $oraPrenotazione . "</td>";
                    echo "</tr>";
                    echo "<tr><td colspan='4'><hr style='margin: 0px'></td></tr>";
                }

                echo "</table>";
            } else {
                echo "<p style='width: 100%; text-align: center'>Nessuna prenotazione trovata per questo account.</p>";
            }

            $conn->close();
        ?>
    </main>
</body>

</html>