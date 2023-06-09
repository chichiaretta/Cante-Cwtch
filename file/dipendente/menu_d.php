<?php
	session_start();

	require_once('../../database/dati_connessione_db.php');

	if(!isset($_SESSION['username'])){ 
		header('location: ../login.php');
	}

	if( $_SESSION["tipologia"]!="dipendente"){
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
        <div class="header_menu_item_login"><a href="timbro_dip.php">Orari</a></div>
        <div class="header_menu_item_login"><a href="turni_timbrati.php">Turni timbrati</a></div>>

        <menu class="menu_container">
            <ul>
                <li class="header_menu_item"><a href="../home_dipendenti.php">Home</a></li>
                <li class="header_menu_item"><a href="menu_d.php">Menù</a></li>
                <li class="header_menu_item"><a href="i servizi_d.php">I servizi</a></li>
                <li class="header_menu_item"><a href="contatti_d.php">Contatti</a></li>
                <li class="header_menu_item"><a href="Lista alcolici_d.php">Enoteca e Drink</a></li>
            </ul>
        </menu>

    </header>

    <main class="main_container">

        <div class="presentazione">
            <div class="container_slide">
                <div class="slider reveal">
                    <div class="slides">
                        <input type="radio" name="radio_-btn" id="radio1" >
                        <input type="radio" name="radio_btn" id="radio2" >
                        <input type="radio" name="radio_btn" id="radio3" >
                        <input type="radio" name="radio_btn" id="radio4" >

                        <div class="slide first">
                           <img src="../../img/menu/antipasto1.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/antipasto2.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/antipasto3.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/antipasto4.png" alt="">
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
                    <h2 class="reveal">Antipasti</h2>
                    <ul class="reveal">
                        <li>Biscotto al nero di seppia, tartare di salmone su crema di cavolo bianco</li>
                        <li>Biscotto salato, tartare di Fassona su crema di Toma Piemontese</li>
                        <li>Varietà di hummus</li>
                        <li>Selezione di crostini</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="presentazione" id="ps1" >
            <div class="container_slide" id="cs1">
                <div class="slider reveal" id="sl1">
                    <div class="slides">
                        <input type="radio" name="radio_btn" id="radio5">
                        <input type="radio" name="radio_btn" id="radio6">
                        <input type="radio" name="radio_btn" id="radio7">
                        <input type="radio" name="radio_btn" id="radio8">

                        <div class="slide first">
                            <img src="../../img/menu/primo1.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/primo2.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/primo3.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/primo4.png" alt="">
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
                    <h2 class="zoom">Primi Piatti</h2>
                    <ul class="reveal">
                        <li>Pici cacio e pepe</li>
                        <li>La carbonara</li>
                        <li>Ravioli asiago e funghi in salsa di aglio nero</li>
                        <li>Risotto allo champagne e gamberi</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="presentazione">
            <div class="container_slide" >
                <div class="slider reveal">
                    <div class="slides">
                        <input type="radio" name="radio_btn" id="radio9" >
                        <input type="radio" name="radio_btn" id="radio10">
                        <input type="radio" name="radio_btn" id="radio11">
                        <input type="radio" name="radio_btn" id="radio12">

                        <div class="slide first">
                           <img src="../../img/menu/secondo1.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/secondo2.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/secondo3.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/secondo4.png" alt="">
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
                    <h2 class="reveal">Secondi</h2>
                    <ul class="reveal">
                        <li>Roast beef</li>
                        <li>Tonno scottato in salsa di sesamo</li>
                        <li>Caviale di melanzane con sgombro</li>
                        <li>Insalata di tonno in avocado</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="presentazione" id="ps1">
            <div class="container_slide" id="cs1">
                <div class="slider zoom" id="sl1">
                    <div class="slides">
                        <input type="radio" name="radio_btn" id="radio13">
                        <input type="radio" name="radio_btn" id="radio14">
                        <input type="radio" name="radio_btn" id="radio15">
                        <input type="radio" name="radio_btn" id="radio16">

                        <div class="slide first">
                            <img src="../../img/menu/burger1.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/burger2.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/burger3.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/burger4.png" alt="">
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
                    <h2 class="reveal">Hamburger</h2>
                    <ul class="reveal">
                        <li>Burger 150g, cipolle caramellate, rucola, scamorza</li>
                        <li>Pane nero, burger di salmone, cetriolo fresco, salsa yogurt</li>
                        <li>Pane rosa, burger 150g, mozzarella</li>
                        <li>Contorno di patatine fritte</li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="presentazione">
            <div class="container_slide">
                <div class="slider zoom">
                    <div class="slides">
                        <input type="radio" name="radio_btn" id="radio17">
                        <input type="radio" name="radio_btn" id="radio18">
                        <input type="radio" name="radio_btn" id="radio19">
                        <input type="radio" name="radio_btn" id="radio20">

                        <div class="slide first">
                           <img src="../../img/menu/dolce1.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/dolce2.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/dolce3.png" alt="">
                        </div>

                        <div class="slide">
                            <img src="../../img/menu/dolce4.png" alt="">
                        </div> 

                        <div class="navigation_auto">
                            <div class="auto_btn1"></div>
                            <div class="auto_btn2"></div>
                            <div class="auto_btn3"></div>
                            <div class="auto_btn4"></div>
                        </div>
                    </div>

                    <div class="navigation_manual">
                        <label for="radio17" class="manual_btn"></label>
                        <label for="radio18" class="manual_btn"></label>
                        <label for="radio19" class="manual_btn"></label>
                        <label for="radio20" class="manual_btn"></label>
                    </div>
                </div>

                <div class="container">
                    <h2 class="reveal">Dolci</h2>
                    <ul class="reveal">
                        <li>Brownie al cioccolato, croccante al caramello e gelato al burro di arachidi</li>
                        <li>Millefoglie</li>
                        <li>Tartelletta lime e limone</li>
                        <li>Tortino al cioccolato bianco</li>
                    </ul>
                </div>
            </div>
        </div>

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
    </main>
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