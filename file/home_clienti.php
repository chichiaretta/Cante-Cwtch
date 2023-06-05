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
    <title>Cwach cliente</title>
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="../img/home/sfondo.png">
</head>
<body>

    <header class="header">

        <a href="" class="header_icon_bar">
            <span></span>
            <span></span>
            <span></span>
        </a>

        <div class="header_menu_item_login"><a href="logout.php">Logout</a></div>
        <div class="header_menu_item_login"><a href="prenotazioni.php">Prenota un tavolo</a></div>

        <menu class="menu_container">
            <ul>
                <li class="header_menu_item"><a href="">Home</a></li>
                <li class="header_menu_item"><a href="cliente/menu_c.php">Menù</a></li>
                <li class="header_menu_item"><a href="cliente/i servizi_c.php">I servizi</a></li>
                <li class="header_menu_item"><a href="cliente/contatti_c.php">Contatti</a></li>
                <li class="header_menu_item"><a href="cliente/Lista alcolici_c.php">Enoteca e Drink</a></li>
            </ul>
        </menu>

    </header>
    
    <main>

        <div class="cover_copy">
            <img src="../img/home/sfondo.png" alt="" class="zoom">
            <h1 class="reveal">Cwtch</h1>
            <h4 class="reveal">enjoy it!</h4>
        </div>

        <div class="presentazione">
            <div class="container_slide">
                <div class="slider">

                    <div class="slides">
                        <input type="radio" name="radio_btn" id="radio1">
                        <input type="radio" name="radio_btn" id="radio2">
                        <input type="radio" name="radio_btn" id="radio3">
                        <input type="radio" name="radio_btn" id="radio4">

                        <div class="slide first">
                            <img src="../img/home/home1.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../img/home/home2.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../img/home/home3.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../img/home/home4.png" alt="">
                        </div>    

                        <div class="navigation_auto">
                                <div class="auto_btn1"></div>
                                <div class="auto_btn2"></div>
                                <div class="auto_btn3"></div>
                                <div class="auto_btn4"></div>
                        </div>
                    </div>

                    <div class="navigation_manual">
                        <label for="radio1" class="manual_btn"></label>
                        <label for="radio2" class="manual_btn"></label>
                        <label for="radio3" class="manual_btn"></label>
                        <label for="radio4" class="manual_btn"></label>
                    </div>

                </div>

                <div class="container">
                    <h2 class="reveal">Cwtch Ristò</h2>
                    <p class="reveal">
                        Il nostro ristorante offre un menu gourmet preparato da chef esperti, con ingredienti di alta qualità e un'attenzione particolare alla presentazione dei piatti. Inoltre, abbiamo una vasta selezione di vini provenienti da diverse regioni, conservati nella nostra enoteca. Il nostro obiettivo è fornire ai nostri clienti un'esperienza culinaria unica e indimenticabile, accompagnata da un servizio attento e professionale.
                    </p>
                </div>
            </div>
        </div>

        <div class="presentazione" id="ps1">
            <div class="container_slide" id="cs1">

                <div class="slider" id="sl1">
                    <div class="slides zoom">
                        <input type="radio" name="radio_btn" id="radio5">
                        <input type="radio" name="radio_btn" id="radio6">
                        <input type="radio" name="radio_btn" id="radio7">
                        <input type="radio" name="radio_btn" id="radio8">

                        <div class="slide first">
                            <img src="../img/home/disco1.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../img/home/disco2.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../img/home/disco3.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../img/home/disco4.png" alt="">
                        </div> 

                        <div class="navigation_auto">
                                <div class="auto_btn1"></div>
                                <div class="auto_btn2"></div>
                                <div class="auto_btn3"></div>
                                <div class="auto_btn4"></div>
                        </div>
                    </div>

                    <div class="navigation_manual">
                        <label for="radio5" class="manual_btn"></label>
                        <label for="radio6" class="manual_btn"></label>
                        <label for="radio7" class="manual_btn"></label>
                        <label for="radio8" class="manual_btn"></label>
                    </div>
                </div>

                <div class="container">
                    <h2 class="reveal">Cwtch Club</h2>
                    <p class="reveal">Cwtch Club è dotato di un sistema audio e luci di alta qualità, una spaziosa pista da ballo e una vasta selezione di drink preparati da barman professionisti. Il locale offre anche delle aree VIP riservate per un'esperienza più esclusiva. Il personale di sicurezza è altamente qualificato per garantire un ambiente sicuro e divertente per tutti i clienti. Cwtch è aperto tutte le notti e invita i clienti a venire a ballare e divertirsi.</p>
                </div>

            </div>
        </div>
    </main>

    <footer>
        <div class="footer_container">
            <div class="footer_container_contatti">
                <h3>Chiamaci</h3>
                <a href="">+339 667180</a>
                <br></br>
                <h3>Scrivici</h3>
                <a href="">Cwatch@gmail.com</a>
                <br></br>
                <ul>
                    <li><a href="https://www.instagram.com/"><img src="../img/loghi/instagram.png" alt=""></a></li>
                    <li><a href="https://it-it.facebook.com/"><img src="../img/loghi/facebook.png" alt=""></a></li>
                    <li><a href="https://www.tripadvisor.it/"><img src="../img/loghi/tripadvisor.png" alt=""></a></li>
                </ul>
            </div>  
    
            <div class="footer_container_orari">
                <h3>I nostri orari</h3>
                    <ul>
                        <li>Lun: chiuso</li>
                        <li>Mar • Sab: 12.00 • 14.30</li>
                        <li>Mar • Dom: 18.00 • 22.00</li>
                    </ul>
            </div>
            <div class="footer_container_posto">
                <h3>Ci trovi qui: </h3>
                <p> Via Pradiso, 39 Milano(MI)</p>
            </div>
        </div>
        <div class="footer_container_copyright">
            <p>Copyright 2021 • Tutti i Diritti Riservati • Privacy Policy • Informazioni di Trasparenza </p>
        </div>
    </footer>
</body>

    <a href="https:://wa.me/393333333333/?text=" class="wa-link">
        <img src="../img/loghi/wa.png" alt="" class="img-res">
    </a>
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