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
    <title>Recensioni Ristorante</title>
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
        <h2 style="color: black; margin: 0; padding-top: 25px; padding-bottom: 25px">Scrivi una recensione</h2>

        <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
            <table class="tabaccesso">
                <tr>
                    <td><label for="titolo">Titolo:</label></td>
                    <td style='padding-top: 10px'><input type="text" name="titolo" required><br><br></td>
                </tr>

                <tr>
                    <td><label for="descrizione">Descrizione:</label></td>
                    <td><textarea name="descrizione" rows="10" required></textarea><br><br></td>
                </tr>
            </table>

            <p style="text-align: center"><input type="submit" value="Invia Recensione"></p>
        </form>

        <?php
            $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);
            if ($conn->connect_error) {
                die("<p style='width: 100%; text-align: center'>Connessione al database fallita: " . $conn->connect_error."</p>");
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $titolo = $_POST["titolo"];
                $descrizione = $_POST["descrizione"];
                $username = $_SESSION["username"];

                $sql = "INSERT INTO recensioni (titolo, descrizione, username) 
                    VALUES ('$titolo', '$descrizione', '$username')";

                if ($conn->query($sql) === TRUE) {
                    echo "<p style='width: 100%; text-align: center'>Recensione inviata con successo!</p>";
                } else {
                    echo "<p style='width: 100%; text-align: center'>Errore durante l'invio della recensione: " . $conn->error. "</p>";
                }
            }

            $query = "SELECT titolo, descrizione, username FROM recensioni";
            $result = $conn->query($query);

            if ($result->num_rows > 0) {
                echo "<h2 style='color: black; margin: 0; padding-top: 50px; padding-bottom: 50px'>Recensioni</h2>";
                while ($row = $result->fetch_assoc()) {
                    echo "<div style='width: 75%; height: auto; margin: 0 auto; text-align: center; background-color: #5c9664; padding: 10px'>";
                    echo "<h3>" . $row["titolo"] . "</h3>";
                    echo "<p style='font-size: 20px'><strong>Autore:</strong> " . $row["username"] . "</p>";
                    echo "<p>" . $row["descrizione"] . "</p>";
                    echo "</div>";
                    echo "<div style='height: 50px;'>     </div>";
                }
            } else {
                echo "<div style='width: 50%; padding: 10px; height: auto; text-align: center; justify-content: center; margin: 0 auto; text-align: center; background-color: #5c9664;'>";
                echo "<p>Nessuna recensione disponibile al momento.</p>";
                echo "</div>";
            }

            $conn->close();
        ?>
    </main>
</body>

</html>
