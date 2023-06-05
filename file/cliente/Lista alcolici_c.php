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
    <title>Menu</title>
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

    <main class="main_container">
      
        <div class="presentazione">
            <div class="container_slide">
                <div class="slider reveal">

                    <div class="slides">
                        <input type="radio" name="radio_btn" id="radio1">
                        <input type="radio" name="radio_btn" id="radio2">
                        <input type="radio" name="radio_btn" id="radio3">
                        <input type="radio" name="radio_btn" id="radio4">

                        <div class="slide first">
                           <img src="../../img/bevande/enoteca1.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/bevande/enoteca2.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/bevande/enoteca3.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/bevande/enoteca4.png" alt="">
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
                    <h2 class="reveal">Enoteca Cwtch</h2>
                    <p class="reveal">
                        La Cwtch enoteca offre una vasta selezione di vini pregiati provenienti da tutto il mondo, selezionati con cura per la loro qualità e provenienza. Il personale esperto è disponibile per aiutare i clienti a trovare il vino perfetto per ogni occasione.
                    </p>
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
                            <img src="../../img/bevande/vinobianco1.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/bevande/vinobianco2.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/bevande/vinobianco3.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/bevande/vinobianco4.png" alt="">
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
                    <h2 class="reveal">Vini bianchi</h2>
                    <ul class="reveal">
                        <li>Vermentino di Gallura-Vigna'ngena-Capichera-Arzachena(Ot) 2010</li>
                        <li>Pico-Garganega-Angiolino Maule-gambellara(Vi) 2010</li>
                        <li>Agnese-Fior d'Arancio Secco-Azienda Agricola Alla costiera-Vò 2012(Pd)</li>
                        <li>Soave Classico-montefiorentine-Montecchia di Crosara(Vr) 2005</li>
                    </ul>
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
                           <img src="../../img/bevande/vinorosso1.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/bevande/vinorosso2.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/bevande/vinorosso3.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/bevande/vinorosso4.png" alt="">
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
                        <label for="radio10" class="manua_btn"></label>
                        <label for="radio11" class="manual_btn"></label>
                        <label for="radio12" class="manual_btn"></label>
                    </div>
                </div>

                <div class="container">
                    <h2 class="reveal">Vini rossi</h2>
                    <ul class="reveal">
                        <li>Barbera-Bunéis-Castello del Poggio(At) 2000</li>
                        <li>Barbera-Solo Vino Rosso- Ferraro Maurizio-Montemagno(At) 2000</li>
                        <li>Nebbiolo D'Alba-Bruno Giacosa-Nieve(Cn) 2008</li>
                        <li>Tai Rosso-rezzadore-Lonigo(Vi) 2011</li>
                    </ul>
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
                            <img src="../../img/bevande/cocktail1.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/bevande/cocktail2.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/bevande/cocktail3.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/bevande/cocktail4.png" alt="">
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
                    <h2 class="reveal">Cocktail</h2>
                    <p class="reveal">
                       Cwtch offre una vasta selezione di drink alcolici ed analcolici preparati dai barman professionisti, con un'attenzione alla qualità degli ingredienti. I barman sono in grado di creare cocktail personalizzati in base ai vostri gusti e ci sono anche opzioni per chi non beve alcol. Il personale esperto è a disposizione per dare consigli sulla scelta dei drink.
                    </p>
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
                    <li><a href="https://www.instagram.com/"><img src="../../immagini/instagram.png" alt=""></a></li>
                    <li><a href="https://it-it.facebook.com/"><img src="../../immagini/facebook.png" alt=""></a></li>
                    <li><a href="https://www.tripadvisor.it/"><img src="../../immagini/tripadvisor.png" alt=""></a></li>
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