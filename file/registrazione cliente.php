<?php 
    session_start();
    require("../database/dati_connessione_db.php");
    if(isset($_POST["username"])) $username = $_POST["username"];  else $username = "";
    if(isset($_POST["password"])) $password = $_POST["password"];  else $password = "";
    if(isset($_POST["conferma"])) $conferma = $_POST["conferma"];  else $conferma = "";
    if(isset($_POST["nome"])) $nome = $_POST["nome"];  else $nome = "";
    if(isset($_POST["cognome"])) $cognome = $_POST["cognome"];  else $cognome = "";
    if(isset($_POST["mail"])) $mail = $_POST["mail"];  else $mail = "";
    if(isset($_POST["telefono"])) $telefono = $_POST["telefono"];  else $telefono = "";
    if(isset($_POST["via"])) $via = $_POST["via"];  else $via = "";
    if(isset($_POST["città"])) $città = $_POST["città"];  else $città = "";
    if(isset($_POST["cap"])) $cap = $_POST["cap"];  else $cap = "";
    if(isset($_POST["numero_civico"])) $numero_civico = $_POST["numero_civico"]; else $numero_civico = "";
    if(isset($_POST["nascita"])) $nascita = $_POST["nascita"];  else $nascita = "";
    if(isset($_POST["genere"])) $genere = $_POST["genere"];  else $genere = "";
?>

<!DOCTYPE html>
<html lang="it">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="../style.css">
	<title>Cwtch SignIn</title>
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
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <table class="tabaccesso">
                <tr>
                    <th colspan="2">Registrazione cliente</th>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr style="margin: 0px">
                    </td>
                </tr>
                <tr>
                    <td>Username:</td>
                    <td><input class="input_dati_personali" type="text" name="username" <?php echo "value = '$username'" ?> required></td>
                </tr>
                <tr>
                    <td>Password:</td>
                    <td><input class="input_dati_personali" type="password" name="password" <?php echo "value = '$password'" ?> required></td>
                </tr>
                <tr>
                    <td>Conferma password:</td>
                    <td><input class="input_dati_personali" type="password" name="conferma" <?php echo "value = '$conferma'" ?> required></td>
                </tr>
                <tr>
                    <td>Nome:</td>
                    <td><input class="input_dati_personali" type="text" name="nome" <?php echo "value = '$nome'" ?> required></td>
                </tr>
                <tr>
                    <td>Cognome:</td>
                    <td><input class="input_dati_personali" type="text" name="cognome" <?php echo "value = '$cognome'" ?> required></td>
                </tr>
                <tr>
                    <td>Mail:</td>
                    <td><input class="input_dati_personali" type="text" name="mail" <?php echo "value = '$mail'" ?> required></td>
                </tr>
                <tr>
                    <td>Telefono:</td>
                    <td><input class="input_dati_personali" type="text" name="telefono" <?php echo "value = '$telefono'" ?> required></td>
                </tr>
                <tr>
                    <td>Città:</td>
                    <td><input class="input_dati_personali" type="text" name="città" <?php echo "value = '$città'" ?> required></td>
                </tr>
                <tr>
                    <td>Cap:</td>
                    <td><input class="input_dati_personali" type="text" name="cap" <?php echo "value = '$cap'" ?> required></td>
                </tr>
                <tr>
                    <td>Via:</td>
                    <td><input class="input_dati_personali" type="text" name="via" <?php echo "value = '$via'" ?> required></td>
                </tr>
                <tr>
                    <td>Numero civico:</td>
                    <td><input class="input_dati_personali" type="text" name="numero_civico" <?php echo "value = '$numero_civico'" ?> required></td>
                </tr>
                <tr>
                    <td>Data di nascita:</td>
                    <td><input class="input_dati_personali" type="text" name="nascita" <?php echo "value = '$nascita'" ?> required></td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center">
                        Maschio <input type="radio" name="genere" value="maschio" <?php if($genere=="maschio") echo "checked"?>>
                        Femmina <input type="radio" name="genere" value="femmina" <?php if($genere=="femmina") echo "checked"?>>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <hr style="margin: 0px">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><a href="login.html">Sei già registrato?</a></td>
                </tr>
            </table>
			<p style="text-align: center">
                <input type="submit" value="Invia">
            </p>
        </form>
        <?php
            if (isset($_POST["username"]) and isset($_POST["password"]) and 
                isset($_POST["conferma"]) and isset($_POST["nome"]) and
                isset($_POST["cognome"]) and isset($_POST["telefono"]) and 
                isset($_POST["via"]) and isset($_POST["città"]) and
                isset($_POST["cap"]) and isset($_POST["numero_civico"]) and
                isset($_POST["genere"]) and  isset($_POST["nascita"]))
            if($_POST["username"] == "" or $_POST["pasword"] == "" or $_POST["conferma"] == "" or 
                $_POST["nome"] == "" or $_POST["cognome"] == "" or 
                $_POST["mail"] == "" or $_POST["telefono"] == "" or 
                $_POST["via"] == "" or $_POST["città"] == "" or 
                $_POST["cap"] == "" or $_POST["numero_civico"] == "" or 
                $_POST["genere"] == "" or $_POST["nascita"] == "")
                {echo "username e password non possono essere vuoti!";
            } else if ($_POST["password"] != $_POST["conferma"]) {
                echo "Le password inserite non corrispondono";
            } else {
                $conn = new mysqli($db_servername,$db_username,$db_password,$db_name);
                if($conn->connect_error){
                    die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
                 }
              }

                $myquery = "SELECT username 
						FROM utenti 
						WHERE username='$username'";

                $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");
                if ($ris->num_rows > 0) {
                    echo "Questo username è già stato usato";
                } else {

                    $myquery = "INSERT INTO $tipologia (username, password, nome, cognome, email)
                                VALUES ('$username', '$password', '$nome', '$cognome','$email')";
                    
                    if ($conn->query($myquery) === true) {
                        session_start();
                        $_SESSION["username"]=$username;
                       
                        $conn->close();

                        echo "Registrazione effettuata con successo!<br>sarai ridirezionato alla home tra 5 secondi.";
                        header('Refresh: 5; URL=home.php');

                    } else {
                        echo "Non è stato possibile effettuare la registrazione per il seguente motivo: " . $conn->error;
                    }
                }
        ?>
     <?php 
        error_reporting(E_ALL ^ E_WARNING); // metodo globale ^ significa tranne e funziona da qui in poi
		include('footer.php');
		// @include('footerrr.php');  // con @ evito la generazione di warnings o errors da parte della funzione
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