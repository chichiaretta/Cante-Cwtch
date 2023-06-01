<?php 
    require("../database/dati_connessione_db.php");
    if(isset($_POST["username"])) $username = $_POST["username"];  else $username = "";
    if(isset($_POST["password"])) $password = $_POST["password"];  else $password = "";
    if(isset($_POST["conferma"])) $conferma = $_POST["conferma"];  else $conferma = "";
    if(isset($_POST["nome"])) $nome = $_POST["nome"];  else $nome = "";
    if(isset($_POST["cognome"])) $cognome = $_POST["cognome"];  else $cognome = "";
    if(isset($_POST["indirizzo"])) $indirizzo = $_POST["indirizzo"];  else $indirizzo = "";
    if(isset($_POST["citta"])) $citta = $_POST["citta"];  else $citta = "";
    if(isset($_POST["numero_civico"])) $numero_civico = $_POST["numero_civico"]; else $numero_civico = "";
    if(isset($_POST["tipologia"])) $tipologia = $_POST["tipologia"];  else $tipologia = "";
?>

<!DOCTYPE html>
<html lang="it">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css" integrity="sha512-NhSC1YmyruXifcj/KFRWoC561YpHpc5Jtzgvbuzx5VozKpWvQ+4nXhPdFgmx8xqexRcpAglTj9sIBWINXa8x5w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" href="../style.css">
    <link rel="icon" href="../img/home/sfondo.png">
	<title>Cwtch SignIn</title>
</head>

<body style="background-color: white">
    <!-- Menu in alto -->
    <nav>
        <div class="tornahome">
            <a href="../index.html"><img src="../img/home/sfondo.png" alt=""></a>
            <p>Torna alla home</p>
        </div>
    </nav>
    <!--Fine menu in alto -->

    <!-- Corpo centrale -->
    <main style="background-color: white"> 
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
                    <td><input  class="input_dati_personali" type="text" name="username" <?php echo "value = '$username'" ?> required></td>
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
                    <td>Città:</td>
                    <td><input class="input_dati_personali" type="text" name="citta" <?php echo "value = '$citta'" ?> required></td>
                </tr>
                <tr>
                    <td>Via:</td>
                    <td><input class="input_dati_personali" type="text" name="indirizzo" <?php echo "value = '$indirizzo'" ?> required></td>
                </tr>
                <tr>
                    <td>Numero civico:</td>
                    <td><input class="input_dati_personali" type="text" name="numero_civico" <?php echo "value = '$numero_civico'" ?> required></td>
                </tr>
                <tr colspan="2" style="text-align: center">
                    <td>
                        Dipendente <input type="radio" name="tipologia" value="dipendente" checked>
                    </td>
                    <td>
                        Cliente <input type="radio" name="tipologia" value="cliente">
                <tr>
                    <td colspan="2">
                        <hr style="margin: 0px">
                    </td>
                </tr>
                <tr>
                    <td colspan="2" style="text-align: center;"><a href="login.php  ">Sei già registrato?</a></td>
                </tr>
            </table>
			<p style="text-align: center">
                <input type="submit" value="Invia">
            </p>
        </form>
        <?php
            if (isset($_POST["username"]) and isset($_POST["password"]) and 
                isset($_POST["conferma"]) and isset($_POST["nome"]) and
                isset($_POST["cognome"]) and isset($_POST["indirizzo"]) and 
                isset($_POST["citta"]) and isset($_POST["numero_civico"])){

                if($_POST["username"] == "" or $_POST["password"] == "" or $_POST["conferma"] == "" or 
                    $_POST["nome"] == "" or $_POST["cognome"] == "" or 
                    $_POST["indirizzo"] == "" or $_POST["citta"] == "" or 
                    $_POST["numero_civico"] == "")
                    {echo "username e password non possono essere vuoti!";}

                else if ($_POST["password"] != $_POST["conferma"]) {
                    echo "Le password inserite non corrispondono";
                } 
                
                else {
                    $conn = new mysqli($db_servername,$db_username,$db_password,$db_name);
                    if($conn->connect_error){
                        die("<p>Connessione al server non riuscita: ".$conn->connect_error."</p>");
                    }

                    $myquery = "SELECT username 
                            FROM cliente 
                            WHERE username='$username'";

                    $ris = $conn->query($myquery) or die("<p>Query fallita!</p>");
                    if ($ris->num_rows > 0) {
                        echo "Questo username è già stato usato";
                    } else {

                        $myquery = "INSERT INTO $tipologia (username, password, nome, cognome, indirizzo, citta, numero_civico)
                                    VALUES ('$username', '$password', '$nome', '$cognome','$indirizzo', '$citta', '$numero_civico')";
                        
                        if ($conn->query($myquery) === true) {
                            session_start();
                            $_SESSION["username"]=$username;
                            $_SESSION["tipologia"]=$_POST["tipologia"];
                            
						    $conn->close();

                            echo "Registrazione effettuata con successo!<br>sarai ridirezionato alla home tra 5 secondi.";
                            header('Refresh: 5; URL=home.php');

                        } else {
                            echo "Non è stato possibile effettuare la registrazione per il seguente motivo: " . $conn->error;
                        }
                    }
                }
            }
        ?>
    </main>
</body>
    