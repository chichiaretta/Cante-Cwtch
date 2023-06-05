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
    <title>I servizi</title>
    <script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
    <link rel="stylesheet" href="../../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap" rel="stylesheet">
    <link rel="icon" href="../../img/home/sfondo.png">
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
        <div class="header_menu_item_login"><a href="cliente/tab_prenotazioni_cliente.php">Le tue prenotazioni</a></div>

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
            <div class="container_slide">
                <div class="slider reveal">
                    <div class="slides">
                        <input type="radio" name="radio_btn" id="radio1">
                        <input type="radio" name="radio_btn" id="radio2">
                        <input type="radio" name="radio_btn" id="radio3">
                        <input type="radio" name="radio_btn" id="radio4">

                        <div class="slide first">
                            <img src="../../img/servizi/servizi1.png" alt="">
                        </div>
                        
                        <div class="slide">
                            <img src="../../img/servizi/servizi2.png" alt="">
                        </div>
                        
                        <div class="slide">
                            <img src="../../img/servizi/servizi3.png" alt="">
                        </div>
                        
                        <div class="slide">
                            <img src="../../img/servizi/servizi4.png" alt="">
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
                    <h2 class="reveal">Cwtch servizi</h2>
                    <p class="reveal">Cwtch servizi ti offre la possibilità di celebrare i tuoi momenti con noi. Per compleanni, diciottesimi, feste di laurea o cene di lavoro il nostro staff altamente preparato per organizzare alla perfezione eventi speciali.</p>
                </div>
            </div>
        </div>

        <div class="presentazione" id="ps1">
            <div class="container_slide" id="cs1">
                <div class="slider reveal" id="sl1">
                    <div class="slides">
                        <input type="radio" name="radio_btn" id="radio5">
                        <input type="radio" name="radio_btn" id="radio6">
                        <input type="radio" name="radio_btn" id="radio7">
                        <input type="radio" name="radio_btn" id="radio8">
                       
                        <div class="slide first">
                            <img src="../../img/servizi/azienda1.png" alt="">
                        </div>
                        
                        <div class="slide">
                            <img src="../../img/servizi/azienda2.png" alt="">
                        </div>
                        
                        <div class="slide">
                            <img src="../../img/servizi/azienda3.png" alt="">
                        </div>
                        
                        <div class="slide">
                            <img src="../../img/servizi/azienda4.png" alt="">
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
                    <h2 class="reveal">Cena aziendale</h2>
                    <p class="reveal">
                    Cwtch offre ai clienti sia sale private che spazi comuni con un'atmosfera unica e un'esperienza gastronomica eccezionale. Il menu può essere personalizzato in base alle esigenze dei clienti e lo staff è a disposizione per assistere nella pianificazione dell'evento, dalla disposizione dei tavoli alla scelta della musica e dell'illuminazione. Cwtch Ristò si impegna a far vivere un'esperienza culinaria indimenticabile ai clienti e invita a contattarli per prenotare una cena aziendale.
                    </p>
                </div>
            </div>
        </div>

        <div class="presentazione">
            <div class="container_slide">
                <div class="slider reveal">
                    <div class="slides">
                        <input type="radio" name="radio_btn" id="radio9">
                        <input type="radio" name="radio_btn" id="radio10">
                        <input type="radio" name="radio_btn" id="radio11">
                        <input type="radio" name="radio_btn" id="radio12">
                        
                        <div class="slide first">
                            <img src="../../img/servizi/compleanni1.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/servizi/compleanni2.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/servizi/compleanni3.png" alt="">
                        </div>
                        
                        <div class="slide">
                            <img src="../../img/servizi/compleanni4.png" alt="">
                        </div>   

                        <div class="navigation_auto">
                            <div class="auto_btn1"></div>
                            <div class="auto_btn2"></div>
                            <div class="auto_btn3"></div>
                            <div class="auto_btn4"></div>
                        </div>
                    </div>

                    <div class="navigation_manual">
                        <label for="radio9" class="manual_btn"></label>
                        <label for="radio10" class="manual_btn"></label>
                        <label for="radio11" class="manual_btn"></label>
                        <label for="radio12" class="manual_btn"></label>
                    </div>
                </div>

                <div class="container">
                    <h2 class="reveal">Diciottesimo e compleanni</h2>
                    <p class="reveal">
                        Cwtch offre diverse opzioni per festeggiare un compleanno, tra cui cena, aperitivo con gli amici o festa in discoteca. Cwtch Ristò dispone di spazi ampi e ben arredati, con la possibilità di personalizzare il menu e il servizio. Inoltre, il sistema audio e luci di alta qualità garantisce l'atmosfera perfetta per ballare e divertirsi con gli amici, mentre le aree VIP offrono un'esperienza ancora più esclusiva. Cwtch si impegna a far vivere una serata indimenticabile ai clienti e invita a contattarli per prenotare una festa di compleanno.
                    </p>
                </div>
            </div>
        </div>

        <div class="presentazione" id="ps1">
            <div class="container_slide" id="cs1">
                <div class="slider reveal" id="sl1">
                    <div class="slides">

                        <input type="radio" name="radio_btn" id="radio13">
                        <input type="radio" name="radio_btn" id="radio14">
                        <input type="radio" name="radio_btn" id="radio15">
                        <input type="radio" name="radio_btn" id="radio16">
                        
                        <div class="slide first">
                            <img src="../../img/servizi/laurea1.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/servizi/laurea2.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/servizi/laurea3.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/servizi/laurea4.png" alt="">
                        </div> 

                        <div class="navigation_auto">
                            <div class="auto_btn1"></div>
                            <div class="auto_btn2"></div>
                            <div class="auto_btn3"></div>
                            <div class="auto_btn4"></div>
                        </div>
                    </div>
                    <div class="navigation_manual">
                        <label for="radio13" class="manual_btn"></label>
                        <label for="radio14" class="manual_btn"></label>
                        <label for="radio15" class="manual_btn"></label>
                        <label for="radio16" class="manual_btn"></label>
                    </div>
                </div>

                <div class="container">
                    <h2 class="reveal">Festa di laurea</h2>
                    <p class="reveal">Cwtch offre un ambiente festoso e accogliente per celebrare la laurea, con spazi ampi e ben arredati. Il personale altamente qualificato personalizzerà il menu e fornirà un servizio di altissimo livello per soddisfare le esigenze dei clienti. Il sistema audio e luci di alta qualità creerà l'atmosfera perfetta per ballare e divertirsi, e sono disponibili servizi aggiuntivi come catering, fotografi e DJ. I clienti possono scegliere tra apericena, cena al tavolo o rinfresco, e il locale si impegna a far vivere una serata indimenticabile.</p>
                </div>
            </div>
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