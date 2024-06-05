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
                href="index.html"><img class="logo" src="imgs/logointercable.png" alt="logo">
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

    <section class="onas_uvod">
        <div class="onas_uvod_text">
            <h1 class="onas_uvod_title">Zistite všetko potrebné o firme Intercable</h1>
            <p class="zamestanie_uvod_baseline">Tu nájdete všetky informácie o výrobe, závode v Kriváni, rozmiestneniach závodov a spätnej väzbe našich zákazníkov.</p>
        

    </section>
    <div class="spacer11 layer11"></div>
    <section class="zamestnanie_vyhody" id="zamestnanie_vyhody_scroll">
        <img src="imgs/intercable_krivan_zamestnanci.jpg" alt="company_learning" class="zamestnanie_vyhody_img">
        <hr class="zamestnanie_vyhody_vyhody_hr">
        <div class="zamestnanie_vyhody_text">
            <h1 class="zamestnanie_vyhody_title">Spoločnosť v Kriváni</h1>
            <ul class="zamestanie_uvod_baseline">
                <li>Viac ako 1000 zamestnancov</li>
                <li>Druhý najväčší dodávateľ elektrických vodičov v Európe</li>
                <li>Viac ako 20 000 rôznych artiklov vyprodukovaných denne</li>
            </ul>
            
        </div>
    </section>
    <div class="spacer12 layer12"></div>
    <section class="zamestnanie_vyhody_specialne_prilezitosti">
    
        
    
    </section>


    <div class="spacer13 layer13"></div>


    <section class="zamestnanie_vyhody_benefity">
        
        <img src="imgs/bruneck.jpg" alt="company_benefits" class="zamestnanie_vyhody_benefity_img">
        <hr class="zamestnanie_vyhody_benefity_hr">
        <div class="zamestnanie_vyhody_benefity_text">
            <h1 class="zamestnanie_vyhody_benefity_title">Centrála v Brunecku</h1>
            <ul class="zamestnanie_vyhody_benefity_baseline">
                <li>Zamestnáva viac ako 700 zamestnancov</li>
                <li>Založená v roku 1972</li>
                <li>Centrála Intercable Tools a Intercable Automotive</li>
            </ul>
            
        </div>
    </section>

    <section class="ziadost_o_zamestnanie">
        <div class="spacer14 layer14" id="ziadost_o_zamestnanie_scroll"></div>
        <div class="ziadost_o_zamestnanie_text">
            <h1 class="ziadost_o_zamestnanie_title">Dajte nám vedieť!</h1>
            <p class="ziadost_o_zamestnanie_baseline">Dajte nám vedieť komentárom čo si o firme myslíte!</p>
            <i class="fas fa-arrow-down" style="margin-bottom: 150px;"></i>
        </div>
        <div>
        
        <?php
            include "comment-index.php";
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