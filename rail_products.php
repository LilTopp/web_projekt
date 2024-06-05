<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="button" href="button.scss">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <script src="https://kit.fontawesome.com/bf08b35ef6.js" crossorigin="anonymous"></script>
    <title>Intercable</title>
</head>

<body>
    
    <button onclick="topFunction()" id="myBtn" title="Go to top" style="display: block; width: 43px;">▲</button>
    <header>
    
        <a
                href="index.php"><img class="logo" src="imgs/logointercable.png" alt="logo">
        </a>
        
        <nav class="navbar">
            
            <ul class="navlinks">
                <li class="Onas"><a href="#">O nás</a></li>
                <li class="Vyroba"><a href="vyroba.php">Výroba</a></li>
                <li class="Zamestnanie"><a href="zamestnanie.php">Zamestnanie</a></li>
            </ul>
            <ul class="languagelinks" style="height: 40px; width: 40px;">
                <li class="language-slovakia" style="height: 40px; width: 40px;">
                    <a href="#" class="language-link">
                        <img src="imgs/slovakiaflag.png" alt="slovakiaflag" width="40" height="40" class="slovakia-img">
                    </a>
                    <div class="language-submenu">
                        <li class="eng-li" style="padding-top: 5px; margin-right: -5px; padding-right: Opx;" style="height: 20px; width: 20px;">
                            <a href="#" class="england-flag">
                                <img src="imgs/englandflag.png" alt="englandflag" width="20" height="20" class="england-img" style="margin-right: -5px;">
                            </a>
                        </li>
                        <li class="ger-li" style="padding-top: 5px;" style="height: 20px; width: 20px;" style="margin-left: 20px;">
                            <a href="https://www.intercable.com/de" class="germany-flag">
                                <img src="imgs/germanyflag.png" alt="germanyflag" width="20" height="20" class="germany-img">
                            </a>
                        </li>
                    </div>
                </li>
            </ul>
            
        </nav>
           
    </header>

    <section class="rail_products">
        <div class="rail_products_section">
            <div class="rail_products_text">
                <h1 class="rail_products_title">Komponentné produkty odolné <br> voči korózii</h1>
                <hr>
                <p class="rail_products_baseline">Naše komponenty odolné voči korózii sú vždy vyrobené z pevnej nehrdzavejúcej ocele alebo pozinkovanej medi</p>
                
            </div>
            <div class="rail_products_image">
                <img src="imgs/rail1.png" alt="auto_plastic_img" style="width: 40vw; height: 30vw;">
            </div>
        </div>
        
        <div class="spacer6 layer6"></div>
    
    </section>

    <section class="rail_products_anti_theft">
        <div class="rail_products_anti_theft_section">
                <div class="rail_products_anti_theft_image">
                    <img src="imgs/rail2.jpg" alt="connectors_img" style="width: 40vw; height: 30vw;">
                </div>
                <div class="rail_products_anti_theft_text">
                    <h1 class="rail_products_anti_theft_title">Vonkajšie uzemňovacie konektory <br> proti krádeži</h1>
                    <hr>
                    <p class="rail_products_anti_theft_baseline">Vonkajšie uzemňovacie konektory proti krádeži sú vyrobené zo zmiešaných materiálov, ako je meď, oceľ a hliník</p>
                    
                </div>
                
        </div>

    </section>

    <section class="rail_products_eye_ducts">
    <div class="spacer7 layer7"></div>
        <div class="rail_products_eye_ducts_section">
            
            <div class="rail_products_eye_ducts_text">
                <h1 class="rail_products_eye_ducts_title">Káblové oká a konektory pre uzemňovacie vodiče</h1>
                <hr>
                <p class="rail_products_eye_ducts_baseline">Káblové oká a konektory pre uzemňovacie vodiče vyrobené so 100-ročnými skúsenosťami.</p>
                
            </div>
            <div class="rail_products_eye_ducts_image">
                <img src="imgs/rail3.png" alt="automotive_cable_img" style="width: 40vw; height: 30vw;">
            </div>
        </div>
           
    </section>

    <div class="spacer17 layer17"></div>


    <footer class="footer">
            <a href="#top" class="footer_logo">
                <img class="logo3" src="imgs/logointercable_white.png" alt="logo2">
            </a>
            <div class="footer_info">
                <a href="https://www.intercable.com/en/privacy"><p>Privacy</p></a>
                <a href="https://www.intercable.com/en/cookies"><p>Cookies</p></a>
                <a href="https://www.intercable.com/en/contact-us"><p>Contact</p></a>
                <a href="https://www.intercable.sk/imprint"><p>Imprint</p></a>
            </div>
    </footer>