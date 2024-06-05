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
                <li class="Onas"><a href="onas.php">O nás</a></li>
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

    <section class="zamestnanie_uvod">
        <div class="zamestanie_uvod_text">
            <h1 class="zamestanie_uvod_title">Vitajte na našom kariérnom portáli</h1>
            <p class="zamestanie_uvod_baseline">Tu nájdete všetky informácie o kariérnych príležitostiach, výhod a výmeny práce Intercable Group.</p>
            <div class="zamestnanie_uvod_buttons">
                <div class="button8">
                    <div class="container8">
                        <div class="center8">
                        <button class="btn8">
                            <a href="#zamestnanie_vyhody_scroll">
                                <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                </svg>
                                <span>Výhody</span>
                            </a>
                        </button>
                        </div>
                    </div>
                                    
                </div>

                <div class="button9">
                    <div class="container9">
                        <div class="center9">
                        <button class="btn9">
                            <a href="#ziadost_o_zamestnanie_scroll">
                                <svg width="180px" height="60px" viewBox="0 0 180 60" class="border">
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="bg-line" />
                                <polyline points="179,1 179,59 1,59 1,1 179,1" class="hl-line" />
                                </svg>
                                <span>Žiadosť o zamestnanie</span>
                            </a>
                        </button>
                        </div>
                    </div>
                                    
                </div>
                
            </div>
        </div>
        
    </section>
    <div class="spacer11 layer11"></div>
    <section class="zamestnanie_vyhody" id="zamestnanie_vyhody_scroll">
        <img src="https://www.ciwm.co.uk/images/Training_Section/2020/New%20Homepage/4%20Main%20boxes/Bespoke-Learning.png" alt="company_learning" class="zamestnanie_vyhody_img">
        <hr class="zamestnanie_vyhody_vyhody_hr">
        <div class="zamestnanie_vyhody_text">
            <h1 class="zamestnanie_vyhody_title">Ďalšie vzdelanie</h1>
            <ul class="zamestanie_uvod_baseline">
                <li>Individuálne a skupinové možnosti školenia</li>
                <li>Medzinárodné skúsenosti</li>
                <li>Združenie štúdia a práce</li>
            </ul>
            
        </div>
    </section>
    <div class="spacer12 layer12"></div>
    <section class="zamestnanie_vyhody_specialne_prilezitosti">
        
        <div class="zamestnanie_vyhody_specialne_prilezitosti_text">
            <h1 class="zamestnanie_vyhody_specialne_prilezitosti_title">Špeciálne udalosti</h1>
            <ul class="zamestanie_vyhody_specialne_prilezitosti_baseline">
                <li>Odmeny za odpracované roky</li>
                <li>Svadobný dar</li>
                <li>Narodeninový darček</li>
            </ul>
            
        </div>
        <hr class="zamestnanie_vyhody_specialne_prilezitosti_hr">
        <img src="https://jobs.intercable.com/fileadmin/_processed_/6/1/csm_reli_geschenk_63d0d99356.jpg" alt="special_occasions" class="zamestnanie_vyhody_specialne_prilezitosti_img">
    
    </section>


    <div class="spacer13 layer13"></div>


    <section class="zamestnanie_vyhody_benefity">
        
        <img src="https://jobs.intercable.com/fileadmin/_processed_/f/8/csm_reli_mutual_help_be20690a8b.jpg" alt="company_benefits" class="zamestnanie_vyhody_benefity_img">
        <hr class="zamestnanie_vyhody_benefity_hr">
        <div class="zamestnanie_vyhody_benefity_text">
            <h1 class="zamestnanie_vyhody_benefity_title">Firemné benefity</h1>
            <ul class="zamestnanie_vyhody_benefity_baseline">
                <li>Nadpriemerne platená práca na zmeny</li>
                <li>Bonus a ročný zisk</li>
                <li>Zľavy na nákup produktov Intercable</li>
            </ul>
            
        </div>
    </section>

    <section class="ziadost_o_zamestnanie">
        <div class="spacer14 layer14" id="ziadost_o_zamestnanie_scroll"></div>
        <div class="ziadost_o_zamestnanie_text">
            <h1 class="ziadost_o_zamestnanie_title">Žiadosť o zamestnanie</h1>
            <p class="ziadost_o_zamestnanie_baseline">Vyberte si z <a href="#" class="pracovne_ponuky_link">aktuálnych pracovných ponúk</a> alebo vyplnte online formulár</p>
            <i class="fas fa-arrow-down" style="margin-bottom: 150px;"></i>
        </div>
        <div>
        <?php
            include "pracovnyformular.php";
        ?>

    </div>
        
    </section>
    
    <script src="./button.js"></script>
    <script>
    $(".slovakia-img").click(function () {
        $(".england-img").toggleClass("show-england");
        $(".germany-img").toggleClass("show-germany");
    });
    </script>


</body>

    