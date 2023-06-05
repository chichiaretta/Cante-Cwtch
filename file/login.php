<?php
    session_start();
    require("../database/dati_connessione_db.php");
    if(isset($_POST["username"])){$username = $_POST["username"];} else {$username = "";}
    if (isset($_POST["password"])) {$password = $_POST["password"];} else {$password = "";}
    if (isset($_POST["tipologia"])) {$tipologia = $_POST["tipologia"];} else {$tipologia = "";}
?>

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="icon" href="../img/home/sfondo.png">
    <title>Cwtch Login</title>
</head>

<body style="background-color: white">

    <nav>
        <div class="tornahome">
            <a href="../index.html"><img src="../img/home/sfondo.png" alt=""></a>
            <p>Torna alla home</p>
        </div>
    </nav>

    <main style="background-color: white">
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" style="padding-top: 125px">
            <table class="tabaccesso">
                <tr>
                    <th colspan="2">Sei già registrato?</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr style="margin: 0px">
                    </td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input class="contenuto_dati" type="text" name="username" value="<?php echo $username; ?>" required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input class="contenuto_dati" type="password" name="password" value="<?php /*echo $password; */?>" required></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr style="margin: 0px">
                    </td>
                </tr>
                <tr colspan="2" style="text-align: center">
                    <td>
                        Dipendente <input type="radio" name="tipologia" value="dipendente" checked>
                    </td>
                    <td>
                        Cliente <input type="radio" name="tipologia" value="cliente">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><a href="registrazione.php">Non sei registrato?</a></td>
                </tr>
            </table>
            <p style="text-align: center"><input type="submit" value="Accedi"></p>
        </form>

        <?php
            if (isset($_POST["username"]) and isset($_POST["password"]) and isset($_POST["tipologia"])) {
                $conn = new mysqli($db_servername, $db_username, $db_password, $db_name);

                if ($conn->connect_error) {
                    die("<p style='width: 100%; text-align: center'>Connessione al server non riuscita: ".$conn->connect_error."</p>");
                }

                $myquery = "SELECT username, password 
                            FROM $tipologia 
                            WHERE username='$username'
                                AND password='$password'";

                $ris = $conn->query($myquery) or die("<p style='width: 100%; text-align: center'>Query fallita! ".$conn->error."</p>");

                if ($ris->num_rows == 0) {
                    echo "<p style='width: 100%; text-align: center'>Utente non trovato o password errata</p>";
                    $conn->close();
                } else {
                    echo "<p style='width: 100%; text-align: center'>Utente trovato!</p>";
                    echo "<p style='width: 100%; text-align: center'>Sarai reinderizzato alla home principale tra 2 secondi.</p>";

                    $_SESSION["username"] = $username;
                    $_SESSION["tipologia"] = $tipologia;

                    $conn->close();
                    header('Refresh: 2; URL = home.php');
                    exit;
                }
            }
        ?>	
            
    </main>
</body>
</html>
