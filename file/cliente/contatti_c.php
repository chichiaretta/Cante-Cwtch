<?php
	session_start();

	require_once('../../database/dati_connessione_db.php');

	if(!isset($_SESSION['username'])){ 
		header('location: ../login.php');
	}

	if( $_SESSION["tipologia"]!="cliente"){
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
    <title>Contatti</title>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="../../img/home/sfondo.png">
    <title>Contatti</title>
</head>

<body>
    <header class="header">

        <a href="" class="header_icon_bar">
            <span></span>
            <span></span>
            <span></span>
        </a>

        <div class="header_menu_item"><a href="../logout.php">Logout</a></div>
        <div class="header_menu_item_login"><a href="../prenotazioni.php">Prenota un tavolo</a></div>
        <div class="header_menu_item_login"><a href="tab_prenotazioni_cliente.php">Le tue prenotazioni</a></div>
        <div class="header_menu_item_login"><a href="recensioni.php">Recensioni</a></div>

        <menu class="menu_container">
            <ul>
                <li class="header_menu_item"><a href="../home_clienti.php">Home</a></li>
                <li class="header_menu_item"><a href="menu_c.php">Menù</a></li>
                <li class="header_menu_item"><a href="i servizi_c.php">I servizi</a></li>
                <li class="header_menu_item"><a href="contatti_c.php">Contatti</a></li>
                <li class="header_menu_item"><a href="Lista alcolici_c.php">Enoteca e Drink</a></li>
            </ul>
        </menu>

    </header>

    <main>
        <div class="presentazione">
            <div class="container_contatti">
                <div class="section">
                    <div class="section_input reveal">
                        <h2 class="info_contatti">Contattaci</h2>
                        <input type="text" placeholder="Nome" maxlength="20">
                        <input type="text" placeholder="Email" maxlength="20">
                        <input type="text" placeholder="Messaggio" maxlength="300">
                        
                        <div class="button">
                            <p class="reveal">Invia</p>
                        </div>
                    </div>
                </div>
                
                <div class="container">
                    <p class="info_contatti">Via paradiso, 28<br>
                        20158 Milano <br>
                        tel. 02 3060451 <br>
                        <a href="https://www.google.com/intl/it/gmail/about/">Cwatch@gmail.com</a>
                    </p>
                    <img src="../../img/contatti/contatti.png" alt="" class="zoom">
                </div>
            </div> 
        </div> 

        <div class="map zoom">
            <iframe  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11192.918657659056!2d9.1837812!3d45.4651773!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4786c15368f67a49%3A0x9666d3bd3b51251!2sMiB%20Milano%20-%20Restaurant%20Caf%C3%A8!5e0!3m2!1sit!2sit!4v1679012431247!5m2!1sit!2sit" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </main>

    <footer>
        <div class="footer_container">

            <div class="footer_container_contatti">
                <h3>Chiamaci</h3>
                <a href="">+339 667180</a>
                <br>
                <h3> scrivici</h3>
                <a href="">Cwatch@gmail.com</a>
                <ul>
                    <li><a href="https://www.instagram.com/"><img src="../../img/loghi/instagram.png" alt=""></a></li>
                    <li><a href="https://it-it.facebook.com/"><img src="../../img/loghi/facebook.png" alt=""></a></li>
                    <li><a href="https://www.tripadvisor.it/"><img src="../../img/loghi/tripadvisor.png" alt=""></a></li>
                </ul>
            </div>  
    
            <div class="footer_container_orari">
                <h3>i nostri orari</h3>
                    <ul>
                        <li>Lun: chiuso</li>
                        <li>Mar • Sab: 12.00 • 14.30</li>
                        <li>Mar • Dom: 18.00 • 22.00</li>
                    </ul>
            </div>

            <div class="footer_container_posto">
                <h3>Ci trovi qui </h3>
                <p> Via Pradiso, 39 Milano(MI)</p>
            </div>
        </div>

        <div class="footer_container_copyright">
            <p>Copyright 2021 • Tutti i Diritti Riservati • Privacy Policy • Informazioni di Trasparenza </p>
        </div>
    </footer>
</body>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
           
            $(".header_icon_bar").click(function(e){
               
                $(".menu_container").toggleClass('is-open');
                e.preventDefault();
            });
        });
        ScrollReveal().reveal('.reveal', { distance: '50px', duration: 1500, easing: 'cubic-bezier(0.5, 0, 0, 1)' ,interval: 600 });
        ScrollReveal().reveal('.zoom', {  duration: 1500, easing: 'cubic-bezier(0.5, 0, 0, 1)' ,interval: 200, scale: 0.65});
    </script>
</html>