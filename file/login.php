<?php
    require("../database/dati_connessione_db.php");
    if(isset($POST["username"])){$username = $POST["username"];} else {$username = "";}
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

<body>
    <!-- Menu in alto -->
    <nav>
        <div class="tornahome">
            <a href="../index.html"><img src="../img/home/sfondo.png" alt=""></a>
            <p>Torna alla home</p>
        </div>
    </nav>
    <!--Fine menu in alto -->

    <!-- Corpo centrale -->
    <main>
		<form action="<?php $_SERVER['PHP_SEL-F'] ?>" method="post">
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
                <td>Mail:</td>
                <td><input class="contenuto_dati" type="text" name="mail" value="<?php /*echo $password; */?>" required></td>
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

        <div class="invio">
            <p><input type="submit" value="Accedi"></p>
        </div>

        <?php
			if (isset($_POST["username"]) and isset($_POST["password"]) and isset($_POST["tipologia"])) {
			$conn = new mysqli($db_servername,$db_username,$db_password,$db_name);}
            if($conn->connect_error){
                die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
            }

            $myquery = "SELECT username, password 
                        FROM $tipologia 
                        WHERE username='$username'
                            AND password='$password'";

            $ris = $conn->query($myquery) or die("<p>Query fallita! ".$conn->error."</p>");
            if($ris->num_rows == 0){
                echo "<p>Utente non trovato o password errata</p>";
                $conn->close();
            } 

    ?>	
            
    </main>
    <!-- Fine corpo centrale -->

    <footer>
        <div class="footer_container">
            <div class="footer_container_contatti">
                <h3>Chiamaci:  </h3>
                <a href="">+339 667180</a>
                <br></br>
                <h3>Scrivici:  </h3>
                <a href="">Cwatch@gmail.com</a>
                <ul>
                    <li><a href="https://www.instagram.com/"><img src="../img/loghi/instagram.png" alt=""></a></li>
                    <li><a href="https://it-it.facebook.com/"><img src="../img/loghi/facebook.png" alt=""></a></li>
                    <li><a href="https://www.tripadvisor.it/"><img src="../img/loghi/tripadvisor.png" alt=""></a></li>
                </ul>
            </div>  
    
            <div class="footer_container_orari">
                <h3>I nostri orari: </h3>
                    <ul>
                        <li>Lun: chiuso</li>
                        <li>Mar • Sab: 12.00 • 14.30</li>
                        <li>Mar • Dom: 18.00 • 22.00</li>
                    </ul>
            </div>
            <div class="footer_container_posto">
                <h3>Ci trovi qui:</h3>
                <p><a href="">Via Paradiso, 39 Milano(MI)</a></p>
            </div>
        </div>
        <div class="footer_container_copyright">
            <p>Copyright 2021 • Tutti i Diritti Riservati • Privacy Policy • Informazioni di Trasparenza </p>
        </div>
    </footer>
</body>